<?php namespace App\Http\Controllers;

use App\Repos\UserRepo;
use App\Repos\AreaRepo;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

abstract class AppBaseController extends Controller {

	use DispatchesCommands, ValidatesRequests;

	public $userRepo;
	public $currentUser;
	public $input;
	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{

		$this->userRepo = App::make(UserRepo::class);
		$this->areaRepo = App::make(AreaRepo::class);
		$this->currentUser = Auth::user();
		$this->input = new Input();
	}

}





