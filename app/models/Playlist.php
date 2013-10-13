<?php

class Playlist extends Eloquent
{
	protected $fillable = array('ytid', 'title', 'etag' , 'description');
	public function bands()
    {
        return $this->belongsToMany('Band', 'bands_playlists' , 'band_id' , 'playlist_id');
    }

   	public function bunticles()
    {
        return $this->belongsToMany('Bunticle', 'bunticles_playlists' , 'bunticle_id' , 'playlist_id');
    }

    public function videos()
    {
    	return $this->hasMany('Video');
    }
}