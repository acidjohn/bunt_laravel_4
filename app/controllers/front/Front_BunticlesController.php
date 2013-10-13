<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Front_BunticlesController extends BaseController {
	public $restful = true;


    public function index(){
        return View::make('front.bunticles');
    }
	// public function showProfile(){
	// 	//grab band_id, get model data, pass it on to view

	// }
    
}