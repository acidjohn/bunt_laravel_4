<?php

class Front_TvController extends BaseController {
	public $restful = true;


    public function index(){
        //error an den vreis tin bada
        
        $this->data['playlists'] = Playlist::where('tv','=','1')->get();
        
    	return View::make('front.tv')->with('playlists',$this->data['playlists']);
    }
    public function getPlaylistVideos($id){
        return View::make('front.videos', array('videos'=>Playlist::find($id)->videos , 'playlist'=>Playlist::find($id)->get()));
    }
    
}