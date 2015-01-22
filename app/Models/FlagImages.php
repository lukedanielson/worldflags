<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlagImages extends Model {

	protected $table = 'flag_images';

	protected $fillable = ['country_id', 'year', 'type', 'url', 'created_at', 'updated_at' ];


}