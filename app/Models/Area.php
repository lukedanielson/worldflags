<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

	protected $table = 'areas';

	protected $with = ['FlagImages'];


	public function code_iso($isoCode='alpha-2')
	{
		$columnName = null;

		if($isoCode === 'alpha-2'){
			$columnName = 'iso_3166-1_a2';
		} else if ($isoCode === 'alpha-3'){
			$columnName = 'iso_3166-1_a3';
		}

		return $this->{$columnName};
	}


	public function flagImages()
	{
		return $this->hasMany('App\Models\FlagImages', 'area_id', 'id');
	}


	public function flagImage2015($type='svg')
	{
		$items = $this->flagImages()->where('type', $type);

		return $items->first();
	}


	public function flagWrapCssClasses()
	{
		$classes = ['flag-img-wrap'];

		if( in_array($this->code_iso('alpha-3'), ['NPL']) ) // nepal
		{
			$classes[] = 'flag-img-wrap-inverted-ratio';
			$classes[] = 'flag-img-wrap-no-border';

		} else if ( in_array($this->code_iso('alpha-3'), ['VAT', 'CHE']) ) // vatican, switzerland
		{
			$classes[] = 'flag-img-wrap-even-ratio';
		}

		return $classes;
	}
}