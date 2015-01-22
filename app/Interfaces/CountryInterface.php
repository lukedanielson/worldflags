<?php namespace App\Interfaces;

interface CountryInterface {

	public function all();

	public function paginate($perPage);

	public function sortBy($field, $direction);

	public function find($id);

	public function byParam($param, $value);

	public function byId($id);

	public function bySlug($slug);

	public function byRaw($string);

	public function create($input);

}