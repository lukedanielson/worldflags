<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

	public function getCountryMarkup(){

		$q = Request::all();
		dd($q);
		return 'the countryMarkup yall';

	}


}