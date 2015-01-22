<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model{

	protected $table = 'countries';

	protected $fillable = ['name', 'slug', 'type', 'iso_3166-1_a2', 'iso_3166-1_a2', 'created_at', 'updated_at' ];

	protected $with = ['FlagImages'];



	public function scopeSlugAscending($query)
	{
		return $query->orderBy('slug','ASC');
	}

	public function code_iso($isoCode='3166-1-a2')
	{
		$columnName = null;

		if($isoCode === '3166-1-a2'){
			$columnName = 'iso_3166-1_a2';
		}

		return $this->{$columnName};
	}

	public function flagImages()
	{
		return $this->hasMany('App\Models\FlagImages', 'country_id', 'id');
	}

	public function flagImage2015($type='svg')
	{
		$items = $this->flagImages()->where('type', $type);

		return $items->first();
	}
}