<?php namespace App\Repos;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepo implements UserInterface {

	public function all()
	{
		return User::all();
	}

	public function find($id)
	{
		return User::find($id);
	}

	public function create($input)
	{
		return User::create($input);
	}

}