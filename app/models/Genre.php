<?php

class Genre extends Eloquent
{
	protected $fillable = array('name');
	public function bands()
    {
        return $this->belongsToMany('Band', 'bands_genres' , 'band_id' , 'genre_id');
    }
}