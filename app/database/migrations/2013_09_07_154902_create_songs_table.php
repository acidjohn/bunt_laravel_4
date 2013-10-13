<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('filename');
			$table->integer('band_id');
			$table->timestamps();
			// $table->foreign('band_id')->references('id')->on('bands');
		});

		DB::table('songs')->insert(array(
		    'title'  => 'Empty Streets',
		    'filename'  => 'emptystreets.mp3'
		)); 
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('songs');
	}

}
