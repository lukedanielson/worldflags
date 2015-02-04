<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class FlagImagesTableSeeder extends Seeder {

	public function run()
	{
		$areaRepo = App::make('App\Repos\AreaRepo');
		$countries = $areaRepo->byRaw("slug RLIKE '^(a|b|c|d|e|f|g|h|i|j|k|l|m|n|o|p|q|r|s|t|u|v|w|x|y|z){1}.+'")->get(); //slug LIKE 'a%' OR slug LIKE 'b%' OR slug LIKE 'c%' OR slug LIKE 'd%'

		$svgBasePath = URL::to('/assets/img/flags/2015/svg/natural_aspect/by-name');

		$dt = new DateTime;

		$baseSeed = ['year' => 2015, 'type' => 'svg', 'created_at' => $dt, 'updated_at' => $dt];

		$initSeeds = [];
		foreach($countries as $country){
			$initSeeds[] = ['country_id' => $country->id,     'url' => $svgBasePath . '/' . $country->slug . '.svg'];
		}

		$seeds = [];

		foreach($initSeeds as $initSeed){
			$seeds[] = array_merge($baseSeed, $initSeed);
		}
		if(!empty($seeds)) {
			DB::table('flag_images')->insert($seeds);
		}
	}

}