<?php

class Admin_BandsController extends AdminController {

	public $restful=true;
	
	public function getView($id = null)
	{
		if ($id == null){

			return View::make('admin.viewbands');
		}
		else{
			$band = Band::find($id);	
			return View::make('admin.viewband')
			->with('band', $band);
		}
	}
	
	public function getAdd()
	{
		return View::make('admin.addband');
	}
	
	public function postSubmitBand()
	{
		$returnme = Band::addnewBand();
		return $returnme;
	}
	public function postSubmitImage(){
		
		$returnme = Band::addnewBandImage();
		return $returnme;
	}
	

}