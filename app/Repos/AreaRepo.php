<?php namespace App\Repos;

use App\Models\Country;
use App\Interfaces\AreaInterface;
use Illuminate\Support\Str;

class AreaRepo implements AreaInterface {

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

	public function bySearch($q)
	{
		$qLength = Str::length($q);

		if( $qLength == 1 )
		{
			$query = $this->model->where('name', 'like', $q . '%');

		} else if( $qLength <= 3 )
		{
		    $query = $this->model->where('name', 'like', '%' . $q . '%')
		                    ->orWhere('iso_3166-1_a2', '=', Str::upper($q))
			                ->orWhere('iso_3166-1_a3', 'like', Str::upper($q));
		} else
		{
			$query = ($q === '_all') ? $this->allBy() : $this->model->where('name', 'like', '%' . $q . '%');
		}

		// $this->model->where( function ( $q2 ) use ( $string ) {
			// $q2->whereRaw( 'LOWER(`title`) like ?', array( $string ) );
			// $q2->orWhereRaw( 'LOWER(`desc`) like ?', array( $string ) );
		// });

		return $query;
	}

	public function create($input)
	{
		return $this->model->create($input);
	}


}