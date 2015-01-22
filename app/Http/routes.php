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