<?php

class TestController extends Controller {

public function getIndex()
	{
		return "INDasdasdasdEX PGE";
	}

public function getView($name){
	return $name;
}

public function getAbout(){
	return '<form action="'.URL::to("testcontroller/about").'" method="POST"><input type="text"><input type="submit"></form>';
}

public function postAbout(){
	return "win";
}

}