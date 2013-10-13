<?php

class AdminController extends BaseController {

	 public $restful = true;
   //COMMIT

  public function __construct(){


    }
     public function auth(){
    	if (!Confide::user()) return Redirect::to('franchise/login');
    }  

	  public function getIndex(){
      
    	return View::make('admin.login');
    }     	
    
    public function tester(){
      echo "won";
    }

      public function getDashboard(){
		$data['bands']=Band::all();
		$data['bunticles']=Bunticle::all();
		$data['songs']=Song::all();
		$data['tv']=Playlist::where('tv','=','1');
		
		
      	return View::make('admin.dashboard')->with('data',$data);
      }
      public function getBandMembers()
      {
        if(isset($_GET['term'])){
          $term=$_GET['term'];
          //$users = User::all();
          $users = User::where('username','LIKE','%'.$term.'%')->get();
          $usernames=array();
          foreach($users as $user){
            $usernames[]=$user->username;
          }
          //var_dump($usernames);
          return Response::json($usernames);
        }else{
          return null;
        }
      }
}
