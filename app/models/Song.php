<?php

class Song extends Eloquent
{
	public function band()
    {
        return $this->belongsTo('Band');
    }

    public function genres()
    {
    	return $this->band()->genres();
    }
}