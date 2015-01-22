<?php namespace App\Repos;

use App\Models\Country;
use App\Interfaces\CountryInterface;

class CountryRepo implements CountryInterface {

	protected $model;

	protected $currentSort = ['created_at', 'desc'];
	protected $perPage = 25;

	public function __construct(Country $model)
	{
		$this->model = $model;
	}

	public function paginate($perPage)
	{
		$this->perPage = (int) $perPage;
		return $this;
	}

	public function sortBy($field, $direction = 'DESC')
	{
		$direction = (strtoupper($direction) == 'ASC') ? 'ASC' : 'DESC';
		$this->currentSort = array($field, $direction);
		return $this;
	}


	public function all()
	{
		return $this->model->all();
	}

	public function allBy($colName='name', $direction='ASC')
	{
		return $this->model->orderBy($colName, $direction);
	}


	public function find($id)
	{
		return $this->model->find($id);
	}


	public function byParam($param, $value)
	{
		return $this->model->where($param, $value);
	}


	public function byId($id)
	{
		return $this->byParam('id', $id);
	}

	public function bySlug($slug)
	{
		return $this->byParam('slug', $slug);
	}

	public function byRaw($string)
	{
		return $this->model->whereRaw($string);
	}

	public function create($input)
	{
		return $this->model->create($input);
	}


}