<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlagImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flag_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('area_id')->unsigned()->index();
			$table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
			$table->integer('year')->unsigned();
			$table->string('type')->nullable();
			$table->string('url')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('flag_images');
	}

}
