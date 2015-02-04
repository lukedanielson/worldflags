<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AreasTableSeeder extends Seeder {

	public function run()
	{

		$dt = new DateTime;
		$areas = [];
		$areasArray = \App\Utilities\CountryInfo::getIsoCountriesList();

		foreach($areasArray as $key => $area){
			$areas[] = [
				'name' => $area['name'],
				'slug' => Str::slug($area['name'], '-'),
				'type' => (isset($area['type'])) ? $area['type'] : null,
				'member_of' => (isset($area['member_of'])) ? $area['member_of'] : null,
				'iso_3166-1_a2' => $area['ISO2'],
				'iso_3166-1_a3' => $area['ISO3'],
				'created_at'    => $dt,
				'updated_at'    => $dt
			];
		}


		DB::table('areas')->insert( $areas );
	}

}