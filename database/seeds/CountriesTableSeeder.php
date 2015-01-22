<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CountriesTableSeeder extends Seeder {

	public function run()
	{

		$dt = new DateTime;
		$countries = [];
		$countriesArray = \App\Utilities\CountryInfo::getIsoCountriesList();

		foreach($countriesArray as $key => $country){
			$countries[] = [
				'name' => $country['name'],
				'slug' => Str::slug($country['name'], '-'),
				'type' => (isset($country['type'])) ? $country['type'] : null,
				'member_of' => (isset($country['member_of'])) ? $country['member_of'] : null,
				'iso_3166-1_a2' => $country['ISO2'],
				'iso_3166-1_a3' => $country['ISO3'],
				'created_at'    => $dt,
				'updated_at'    => $dt
			];
		}


		DB::table('countries')->insert( $countries );
	}

}