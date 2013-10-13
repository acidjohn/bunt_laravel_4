<?php

class Admin_BunticlesController extends AdminController {

	public $restful=true;
	public function getView($num=null){
		if($num == null){
			return View::make('admin.viewbunticles');
		}
		else{
			
			return $num;
			// return View::make('admin.viewbunticle')->with('id',$num);
		}
	}
	public function getAddBunticle($num = null){
		if($num!=null)$bunticle=Bunticle::find($num);
		if(isset($bunticle)){
			return View::make('admin.addbunticle')->with('categories',Category::all())->with('users',User::all())->with('id',$num);
		}else{
			return View::make('admin.addbunticle')->with('categories',Category::all())->with('users',User::all());
		}
	}
	public function postAddBunticle(){
		$ret = Bunticle::add();
		return $ret;
	}
	public function getCategoriesView($num=null){
		if($num == null){
			return View::make('admin.viewbunticlecategories')->with('categories',Category::all());
		}
		else{
			// return $num;
			return View::make('admin.addbunticlecategory')->with('id',$num);
		}
	}
	public function getAddCategory($num =null){
		if($num!=null)$category=Category::find($num);
		if(isset($category)){
			return View::make('admin.addbunticlecategory')->with('users',User::all())->with('category',$category);
		}else{
			return View::make('admin.addbunticlecategory')->with('users',User::all());
		}
	}
	public function postAddCategory(){
		$ret = Category::add();
		return $ret;
	}

}