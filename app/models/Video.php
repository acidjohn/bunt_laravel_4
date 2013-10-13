<?php

class Video extends Eloquent
{

	protected $fillable = array('ytid', 'title', 'playlist_id');

	public function playlist()
	{
		return $this->belongsTo('Playlist');
	}

}