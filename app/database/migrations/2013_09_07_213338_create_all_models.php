<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllModels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// TABLES
		// USERS
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('nickname')->unique();
			$table->string('password');
			$table->smallInteger('access_level');
			$table->string('avatar');
			$table->timestamps();
		});
		// BANDS
		Schema::create('bands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->text('bio');
			$table->integer('hits');
			$table->timestamps();
		});
		
		// GENRES
		Schema::create('genres', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
		});

		//BAND_GENRES
		Schema::create('bands_genres', function(Blueprint $table)
		{
			$table->integer('genre_id');
			$table->integer('band_id');
			$table->timestamps();
			// $table->foreign('band_id')->references('id')->on('bands');
			// $table->foreign('genre_id')->references('id')->on('genres');
		});

		// LINK TYPES
		Schema::create('links', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->string('icon');
			$table->timestamps();
		});		

		//BAND_LINKS
		Schema::create('bands_links', function(Blueprint $table)
		{
			$table->integer('link_type');
			$table->integer('band_id');
			$table->string('url');
			$table->timestamps();
			// $table->foreign('band_id')->references('id')->on('bands');
			// $table->foreign('link_type')->references('id')->on('links');
		});

		// MEDIA PLAYLISTS
		Schema::create('playlists', function($table) {
		    $table->increments('id');
		    $table->string('ytid');
		    $table->string('title');
		    $table->string('etag');
		    $table->boolean('tv');
		    $table->integer('hits');
		    $table->timestamps();
		});

		// VIDEOS
		Schema::create('videos', function($table) {
		    $table->increments('id');
		    $table->string('ytid');
		    $table->string('playlist_id');
		    $table->string('title');
		    $table->string('etag');
		    $table->integer('band_id');
		    $table->integer('hits');
		    $table->timestamps();
		    // $table->foreign('band_id')->references('id')->on('bands');
		    // $table->foreign('playlist_id')->references('id')->on('playlists');
		});

		// BUNTICLES
		Schema::create('bunticles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->unique();
			$table->integer('author');
			$table->integer('created_by');
			$table->text('text');
			$table->string('thumb');
			$table->integer('hits');
			$table->timestamps();
			// $table->foreign('author')->references('id')->on('users');
			// $table->foreign('created_by')->references('id')->on('users');
		});

		// BAND PLAYLISTS
		Schema::create('bands_playlists', function(Blueprint $table)
		{
			$table->integer('band_id');
			$table->integer('playlist_id');
			// $table->foreign('band_id')->references('id')->on('bands');
			// $table->foreign('playlist_id')->references('id')->on('playlists');
		});


		// BUNTICLE PLAYLISTS
		Schema::create('bunticles_playlists', function(Blueprint $table)
		{
			$table->integer('bunticle_id');
			$table->integer('playlist_id');
			// $table->foreign('bunticle_id')->references('id')->on('bunticles');
			// $table->foreign('playlist_id')->references('id')->on('playlists');
		});

		//BUNTICLE_LINKS
		Schema::create('bunticles_links', function(Blueprint $table)
		{
			$table->integer('link_type');
			$table->integer('bunticle_id');
			$table->string('url');
			$table->timestamps();
			// $table->foreign('band_id')->references('id')->on('bunticles');
			// $table->foreign('link_type')->references('id')->on('links');
		});

		// DATA
		// USERS
		DB::table('users')->insert(array(
		    'username'  => 'acid',
		    'password'  => 'acid123',
		    'nickname' => 'AcidJohn',
		    'access_level' => '3'
		));

		// BANDS
		DB::table('bands')->insert(array(
			array(
			    'name'  => 'tsifsa band',
			    'bio'  => 'This is a dummy bio text for the best band evah'
			),
			array(
				'name'  => 'Metallira',
			    'bio'  => 'Trolololololol bio'
			)
		)); 

		// GENRES
		DB::table('genres')->insert(array(
			array(
		    	'name'  => 'Rock'
		    ),
		    array(
		    	'name'  => 'Metal'
		    )
		));

		// LINKS
		DB::table('links')->insert(array(
			array(
		    	'type'  => 'generic'
		    ),
		    array(
		    	'type'  => 'facebook'
		    ),
		    array(
		    	'type'  => 'twitter'
		    )
		));

		// GENRES
		DB::table('bunticles')->insert(array(
			array(
		    	'title'  => 'Yo!It\'s summer',
		    	'text' => 'Υπάρχουν πολλές εκδοχές των αποσπασμάτων του Lorem Ipsum διαθέσιμες, αλλά η πλειοψηφία τους έχει δεχθεί κάποιας μορφής αλλοιώσεις, με ενσωματωμένους αστεεισμούς, ή τυχαίες λέξεις που δεν γίνονται καν πιστευτές. Εάν πρόκειται να χρησιμοποιήσετε ένα κομμάτι του Lorem Ipsum, πρέπει να είστε βέβαιοι πως δεν βρίσκεται κάτι προσβλητικό κρυμμένο μέσα στο κείμενο.',
		    	'thumb' => 'thumb1.jpg'
		    ),
		    array(
		    	'title'  => 'Another Bunticle',
		    	'text' => 'Υπάρχουν πολλές εκδοχές των αποσπασμάτων του Lorem Ipsum διαθέσιμες, αλλά η πλειοψηφία τους έχει δεχθεί κάποιας μορφής αλλοιώσεις, με ενσωματωμένους αστεεισμούς, ή τυχαίες λέξεις που δεν γίνονται καν πιστευτές. Εάν πρόκειται να χρησιμοποιήσετε ένα κομμάτι του Lorem Ipsum, πρέπει να είστε βέβαιοι πως δεν βρίσκεται κάτι προσβλητικό κρυμμένο μέσα στο κείμενο.',
		    	'thumb' => 'thumb12.jpg'
		    )
		));
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