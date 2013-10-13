<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Front_BandController extends BaseController {
	public $restful = true;


    public function index($name){
        //error an den vreis tin bada
        App::error(function(ModelNotFoundException $e)
        {
            return Response::make('Artist Not Found', 404);
        });
        $this->data['band'] = Band::where('name','=',$name)->firstOrFail();
        $this->data['band']->hits++;
        $this->data['band']->save();
       
    	return View::make('front.band')->with('band',$this->data['band']);
    }
	// public function showProfile(){
	// 	//grab band_id, get model data, pass it on to view

	// }
    
}