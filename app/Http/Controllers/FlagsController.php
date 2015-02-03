<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FlagsController extends AppBaseController {

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$countries = $this->countryRepo->allBy('slug', 'ASC')->get(); //iso_3166-1_a2

		return view('pages.home.index')->with(['countries' => $countries]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		if($slug === 'random'){
			$country = $this->countryRepo->all()->random(1);
		} else {
			$country = $this->countryRepo->bySlug($slug)->first();
		}

		return view('pages.flags.show')->with(['country' => $country]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
