<?php

class BandProfile extends BaseController {

	public $restful = true;
	public function showProfile(){
		//grab band_id, get model data, pass it on to view

	}
	public function get_index(){
		return View::make('front.artists');
	}


}