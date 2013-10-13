<?php

class Admin_TvController extends AdminController {
	public $restful = true;
	private $api_key="AIzaSyChVrBareOGGm9jZBe9SZMMdNMV1rKjW-o";

    public function index(){
        //error an den vreis tin bada
        
        $this->data['playlists'] = Playlist::where('tv','=','1')->get();
        
    	return View::make('front.tv')->with('playlists',$this->data['playlists']);
    }
	// public function showProfile(){
	// 	//grab band_id, get model data, pass it on to view

	// }
    
    public function update()
    {
    	ini_set('max_execution_time', 300);
    	$bunt_lists=$this->getBuntChannels();//get all playlist info
    	//var_dump($bunt_lists);
		// $video_info=array();
		//$list_info=array();
		//for each playlist
		foreach ($bunt_lists as $list) {
			$etag_changed=false;
			$videolookup=false;
			if(Playlist::where('ytid','=',$list['id'])->first()!=null){
				//an i playlist yparxei, des an to etag einai idio. an nai tote return, allios kane update & query for videos
				echo("Playlist ".Playlist::where('ytid','=',$list['id'])->first()->title." exists!<br>");
				$videolookup=true;
				//an to etag einai diaforetiko tote kane flag $etag_changed=true && $videolookup=true. kane update tin playlist
			}else{
				//an i playlist den yparxei, apothikeuse tin stin vasi, kai kane query gia ta videos
				$temp_etag=$list['etag'];
				$list_info = Playlist::create(array(
					'ytid'  => $list['id'],
				    'title'  => $list['snippet']['title'],
				    'etag'  => $temp_etag,
				    'description' => $list['snippet']['description']
			    ));
			    var_dump($list_info);
			}
			if($etag_changed){
				//update playlist
			}
			if($videolookup){
				$videos_list=$this->getVideoInfoByPlaylist($list['id']);
				foreach ($videos_list as $video) {
					$video=$video['snippet'];
					if(Video::where('ytid','=',$video['resourceId']['videoId'])->where('playlist_id','=',Playlist::where('ytid','=',$list['id'])->first()->id)->first()!=null){
						//video exists - etag check and update
						echo('video '.$video['title'].'exists!');
					}else{
						$vid = Video::create(array(
							'ytid'  => $video['resourceId']['videoId'],
						    'playlist_id'  => Playlist::where('ytid','=',$list['id'])->first()->id,
						    'title'  => $video['title']
							));
						var_dump($vid);
					}
				}
			}

			}//end foreach
    }


	function getVideoInfoByPlaylist($listid){
		$requrl="https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=".$listid."&key=".$this->api_key;
		$data = json_decode(file_get_contents($requrl),true);
		return $data['items'];
	}

	function getBuntChannels(){
		$requrl='https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId=UCrN-CTG6DKX39cwyohu9I4Q&maxResults=50&key='.$this->api_key;
		$data = json_decode(file_get_contents($requrl),true);
		return $data['items'];
	}
}