<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Requests\Api\V1\ApiContentMarkupRequest;

use App\Http\Controllers\Controller;

use App\Models\Country;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class ApiV1Controller extends ApiV1BaseController {

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
		parent::__construct();

	}


	public function index(){

		return 'the index yall';

	}

	public function getCountryMarkup(ApiContentMarkupRequest $request){

		$q = $request->get('q');
		$countriesReturned = $this->countryRepo->bySearch($q)->get();
		$countriesCt = count($countriesReturned);

		$markup = View::make('partials.flag-items.flag-items-markup')->with(['countries' => $countriesReturned])->render();

		$rData = [
			'data' =>[
				'countries' => ($countriesCt) ? $countriesReturned->toArray() : [],
				'markup' => ($markup) ? $markup : null
			],
			'status' => ($countriesCt) ? 'success' : 'error',
			'msg' => ($countriesCt) ? 'successfully returned countries' : 'error returning any countries'
		];

		$response = Response::json($rData);

		return $response;
	}


}