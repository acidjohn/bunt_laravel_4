<?php

class Band extends Eloquent
{
	protected $fillable = array('name', 'bio', 'shoutout');

	public function members()
	{
		return $this->belongsToMany('User','band_users','band_id','user_id');
	}
	
	public function songs()
	{
		return $this->hasMany('Song');
	}

	public function topSong()
	{
		// return Song::w
	}
	public function genres()
	{
		return $this->belongsToMany('Genre', 'bands_genres' , 'band_id' , 'genre_id');
	}

	public function playlists()
	{
		return $this->belongsToMany('Playlist', 'bands_playlists' , 'band_id' , 'playlist_id');
	}

	public static function addnewBand(){
		$data=Input::all();
		$explodedata = explode(',', $data['genres']);
		$image=Input::file('bandimage');
		$validator = Validator::make(
		array(
			"name"=>$data["name"],
			"bio" =>$data["bio"],
			"genres" =>$data["genres"]
		),
		array(
			"name"=>array('min:2','max:150','required','unique:bands,name'),
			"bio" =>array('min:50','required'),
			"genres" =>array('required'),
		)
		);
		if($validator->fails())
		{

			$messages = $validator->messages();
			$class = 'error';
			$message = '';
			foreach ($messages->all() as $msg)
			{
				$message .= $msg.'<br>';
			}
		}else{
			//Create Band
			$band_data=array(
				'name' => $data["name"],
				'bio' => $data['bio']
				);
			$band= new Band($band_data);
			$class = 'success';
			
			$band->save();

			//Now add genres
			foreach ($explodedata as $genre_name) {
			if(!Genre::where('name','=',strtolower($genre_name))->exists()) {
				$genre = new Genre;
				$genre->name=strtolower($genre_name);
				$genre->save();
			}else{
				$genre=Genre::where('name','=',strtolower($genre_name))->first();
			}
			//attach genre
			$band->genres()->attach($genre->id);
			}

			//now associate users to the band
			// $band_members = ;//explode(",",$data['users']);
			if(isset($data['users'])){
				$band_members = $data['users'];
				foreach ($band_members as $memba) {
					$band->members()->attach($memba);
				}
			}
			mkdir('bandmedia/'.$band->name);
			mkdir('bandmedia/'.$band->name.'/profileimage');
			mkdir('bandmedia/'.$band->name.'/galleries');
			Session::put('band_id', $band->id);
			$returnme['bandid'] = $band->id;
			$message = 'Succesful band profile creation!';
		}
			$returnme['html']='<div class="alert alert-'.$class.' hide" style="display: block;">
                              <button class="close" data-dismiss="alert"></button>
                              '.$message.'
                           </div>';
		return Response::json($returnme);
	}

	public static function addnewBandImage(){
		$band_id = Session::get('band_id');
		$band = Band::find($band_id);
		Image::make(Input::file('image')->getRealPath())->crop(300, 200)->save('bandmedia/'.$band->name.'/profileimage/'.$band->name.'.jpg');
		$band->thumb = 'bandmedia/'.$band->name.'/profileimage/'.$band->name.'.jpg';
		$band->save();
		
		return View::make('admin.viewband')
			->with('band', $band);
	}


}