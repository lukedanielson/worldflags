<?php namespace App\Http\Controllers;

use App\Repos\UserRepo;
use App\Repos\CountryRepo;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

abstract class AppBaseController extends Controller {

	use DispatchesCommands, ValidatesRequests;

	public $userRepo;
	public $currentUser;

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{

		$this->userRepo = App::make(UserRepo::class);
		$this->countryRepo = App::make(CountryRepo::class);
		$this->currentUser = Auth::user();

	}

}





