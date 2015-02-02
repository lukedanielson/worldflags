<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use GuzzleHttp\Event\CompleteEvent;
use GuzzleHttp\Event\ErrorEvent;
use GuzzleHttp\Pool;
use GuzzleHttp\Client;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;


//$countryInfo = \App\Utilities\CountryInfo::getIsoCountriesList();
$router->get( '/', 		['as' => 'home', 'uses' => 'PagesController@getHome' ]);

// Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


$router->group(['prefix' => 'api'], function($router)
{
	// get('/', function() {});

	$router->group(['prefix' => 'v1'], function($router)
	{

		get( '/', 		            ['as' => 'api.v1.index', 'uses' => 'Api\ApiV1Controller@index' ]);
		get( '/countryMarkup', 		['as' => 'api.v1.countryMarkup', 'uses' => 'Api\ApiV1Controller@getCountryMarkup' ]);

	});

});


$router->get( '/getwikiimages', function(){


	$client = new Client();
	$baseUrl = 'https://en.wikipedia.org/w/api.php';
	$params = [ 'action'=>'query', 'list'=>'search', 'format'=>'json', 'srsearch'=>'flag of laos', 'srnamespace' => '6'];

	$countryRepo = App::make('App\Repos\CountryRepo');
	$countries = $countryRepo->byRaw("slug RLIKE '^(u|v|w|x|y|z){1}.+'")->get(); //slug LIKE 'a%' OR slug LIKE 'b%' OR slug LIKE 'c%' OR slug LIKE 'd%'

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

	// resources/assets/img/flags/_wiki
	// dd($fileUrls);
	$imgPath = base_path() . '/resources/assets/img/flags/_wiki/';

	$saveRequests = [];
	foreach($fileUrls as $url){
		$fname = basename($url);
		$localPath =  $imgPath . $fname;
		if(!File::exists($localPath)) {
			$saveRequests[] = $client->createRequest('GET', $url, ['save_to' => $localPath]);
		}
	}

	// $sResults = Pool::batch($client, $fileRequests);

	// Add a single event listener using a callable.
	Pool::send($client, $saveRequests, [
		'complete' => function (CompleteEvent $event) {
			echo 'Completed request to ' . $event->getRequest()->getUrl() . "<br>";
			// echo 'Response: ' . $event->getResponse()->getBody() . "\n\n";
		},
		'error' => function (ErrorEvent $event) {
			echo 'Request failed: ' . $event->getRequest()->getUrl() . "<br>";
			echo $event->getException();
			// Do something to handle the error...
		}
	]);

	dd($saveRequests);

	// $request = $client->createRequest('GET', $baseUrl, ['query' => $params] );
	// $query = $request->getQuery();
	// $query->set('foo', 'bar');
	// $response = $client->send($request);

});