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

	public function getAreaMarkup(ApiContentMarkupRequest $request){

		$s = $request->get('s');
		$itemsReturned = $this->areaRepo->bySearch($s)->get();
		$itemsCt = count($itemsReturned);

		$markup = View::make('partials.flag-items.flag-items-markup')->with(['areas' => $itemsReturned, 's' => $s])->render();

		$rData = [
			'data' =>[
				's' => $s,
				'areas' => $itemsCt,
				'markup' => ($markup) ? $markup : null
			],
			'status' => ($itemsCt) ? 'success' : 'error',
			'msg' => ($itemsCt) ? 'successfully returned items' : 'error returning any items'
		];

		$response = Response::json($rData);

		return $response;
	}


}