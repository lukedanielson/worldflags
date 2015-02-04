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
		$itemsReturned = $this->areaRepo->bySearch($q)->get();
		$itemsCt = count($itemsReturned);

		$markup = View::make('partials.flag-items.flag-items-markup')->with(['countries' => $itemsReturned])->render();

		$rData = [
			'data' =>[
				'countries' => ($itemsCt) ? $itemsReturned->toArray() : [],
				'markup' => ($markup) ? $markup : null
			],
			'status' => ($itemsCt) ? 'success' : 'error',
			'msg' => ($itemsCt) ? 'successfully returned countries' : 'error returning any countries'
		];

		$response = Response::json($rData);

		return $response;
	}


}