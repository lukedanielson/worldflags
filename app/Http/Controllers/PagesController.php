<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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

		$countries = $this->countryRepo->allBy('slug', 'ASC')->get(); //iso_3166-1_a2

		return view('pages.home.index')->with(['countries' => $countries]);
	}


}