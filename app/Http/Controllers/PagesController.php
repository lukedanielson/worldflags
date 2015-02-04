<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use GuzzleHttp\Event\CompleteEvent;
use GuzzleHttp\Event\ErrorEvent;
use GuzzleHttp\Pool;
use GuzzleHttp\Client;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class PagesController extends AppBaseController {

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
		parent::__construct();

	}


	public function getHome()
	{

		$countries = $this->areaRepo->allBy('slug', 'ASC')->get(); //iso_3166-1_a2

		return view('pages.home.index')->with(['countries' => $countries]);
	}


	public function getWikiImages()
	{

		$client = new Client();
		$baseUrl = 'https://en.wikipedia.org/w/api.php';
		$params = [ 'action'=>'query', 'list'=>'search', 'format'=>'json', 'srsearch'=>'flag of laos', 'srnamespace' => '6'];

		$areaRepo = App::make('App\Repos\AreaRepo');
		$countries = $areaRepo->byRaw("slug RLIKE '^(z){1}.+'")->get(); //slug LIKE 'a%' OR slug LIKE 'b%' OR slug LIKE 'c%' OR slug LIKE 'd%'

		$requests = [];
		$searchTerms = [];
		foreach($countries as $country){
			$term = 'flag of ' . $country->name;
			$requestParams = $params;
			$requestParams['srsearch'] = $term;
			$searchTerms[] = $term;
			$requests[] = $client->createRequest('GET', $baseUrl, ['query' => $requestParams] );
		}

		// Results is a GuzzleHttp\BatchResults object.
		$results = Pool::batch($client, $requests);

		$fileTitles = [];
		foreach ($results->getSuccessful() as $response) {
			$json = $response->json();
			if(isset($json['query']) && isset($json['query']['search']) && !empty($json['query']['search'])){
				$firstResult = (isset($json['query']['search'][0])) ? $json['query']['search'][0] : null;
				$secondResult = (isset($json['query']['search'][1])) ? $json['query']['search'][1] : null;
				$fileTitles[] = ($firstResult && isset($firstResult['title'])) ? $firstResult['title'] : null;
				// $fileTitles[] = ($secondResult && isset($secondResult['title'])) ? $secondResult['title'] : null;
			}
		}

		$fileRequests = [];
		foreach($fileTitles as $fileTitle){
			$qParams = [ 'action'=> 'query', 'titles'=> $fileTitle, 'format'=>'json', 'prop' => 'imageinfo', 'iiprop' => 'url' ];
			$fileRequests[] = $client->createRequest('GET', $baseUrl, ['query' => $qParams] );
		}

		$fileUrls = [];

		$fResults = Pool::batch($client, $fileRequests);
		foreach ($fResults->getSuccessful() as $response) {
			$json = $response->json();
			$res = (isset($json['query']) && isset($json['query']['pages']) && isset($json['query']['pages'][-1]) ) ? $json['query']['pages'][-1] : null;
			if ($res) {
				$fileUrls[] = (isset($res['imageinfo']) && isset($res['imageinfo'][0]) && isset($res['imageinfo'][0]['url']) ) ? $res['imageinfo'][0]['url'] : null;
			}
		}

		$imgPath = base_path() . '/resources/assets/img/flags/_wiki/';

		$saveRequests = [];
		foreach($fileUrls as $url){
			$fname = basename($url);
			$localPath =  $imgPath . $fname;
			if(!File::exists($localPath)) {
				$saveRequests[] = $client->createRequest('GET', $url, ['save_to' => $localPath]);
			}
		}

		// Add a single event listener using a callable.
		Pool::send($client, $saveRequests, [
			'complete' => function (CompleteEvent $event) {
				echo 'Completed request to ' . $event->getRequest()->getUrl() . "<br>";
				// echo 'Response: ' . $event->getResponse()->getBody() . "\n\n";
			},
			'error' => function (ErrorEvent $event) {
				echo 'Request failed: ' . $event->getRequest()->getUrl() . "<br>";
				echo $event->getException();
			}
		]);

		dd($saveRequests);

		// $request = $client->createRequest('GET', $baseUrl, ['query' => $params] );
		// $query = $request->getQuery();
		// $query->set('foo', 'bar');
		// $response = $client->send($request);
	}

}