<?php

class Front_BandsController extends BaseController {

	public $restful = true;

	public function __construct(){
            
        // parent::__construct();
        
         $this->data['bands']       = Band::all();

         $this->data['genres']          = Genre::all();
    }

    public function index(){
    	return View::make('front.artists' , $this->data);
    }
	// public function showProfile(){
	// 	//grab band_id, get model data, pass it on to view

	// }


}