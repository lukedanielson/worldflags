<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\URL;

class MasterViewComposer {

	public function __construct()
	{

	}

	public function compose(View $view)
	{
		$currRouteName =  Route::currentRouteName();

		$siteMetaTitle = ($currRouteName === 'home') ? Lang::get('site.meta.title') : $currRouteName . ' :: ' . Lang::get('site.meta.title');

		$siteLogoMainUrl = URL::to('');

		$view->with('siteLogoMainUrl', $siteLogoMainUrl);

		$view->with('currentUser', Auth::user());

		$view->with('currentRouteName', $currRouteName ?: 'Page Name');
		$view->with('currentRouteTitle', $currRouteName ?: 'Page Title');

		$view->with('siteMetaTitle', $siteMetaTitle ?: 'Site Title');

		if ( ! isset($view['siteMetaDescription']))
		{
			$view['siteMetaDescription'] = Lang::get('site.meta.description') ?: 'Page Meta Description';
		}


		$viewBodyClasses = (isset($view['bodyClasses'])) ? $view['bodyClasses'] : array();

		$routeClass = 'route-' . str_replace('.', '-', Route::currentRouteName() );

		if( !in_array($routeClass, $viewBodyClasses) ){ $viewBodyClasses[] = $routeClass; }

		if (Auth::check())
		{
			$viewBodyClasses[] = 'logged-in';
		}

		if(Session::has('errors'))
		{
			$viewBodyClasses[] = 'has-session-errors';
		}

		$view->with('bodyClasses', $viewBodyClasses );



		$view->with('placeholderFlagImg1Url', URL::to('assets/img/flags/2015/svg/natural_aspect/by-name/_none.svg'));

	}



}