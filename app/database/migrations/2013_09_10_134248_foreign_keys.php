<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//BAND_GENRES
		// Schema::table('bands_genres', function(Blueprint $table)
		// {
		// 	$table->foreign('band_id')->references('id')->on('bands');
		// 	$table->foreign('genre_id')->references('id')->on('genres');
		// });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}