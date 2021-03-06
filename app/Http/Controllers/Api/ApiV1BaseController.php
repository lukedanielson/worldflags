<?php namespace App\Http\Controllers\Api;



use App\Repos\UserRepo;
use App\Repos\AreaRepo;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

abstract class ApiV1BaseController extends Controller {

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
		$this->areaRepo = App::make(AreaRepo::class);
		$this->currentUser = Auth::user();

	}


}





