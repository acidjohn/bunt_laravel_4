<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// FRONT ROUTES

Route::get('/', function()
{
   return Redirect::route('home');
});

Route::get('home', array('as' => 'home', function()
{
   return View::make('front.test');
}));
// Route::get('/artists', array('as' => 'artists', function()
// {
//    return View::make('front.artists');
// }));

Route::get('artists', array('as'=>'artists' , 'uses'=> 'Front_BandsController@index'));
Route::get('artists/{name}', array('as'=>'band' , 'uses'=> 'Front_BandController@index'));

Route::get('bunticles', array('as' => 'bunticles', 'uses' => 'Front_BunticlesController@index' ));

Route::get('tv', array('as'=>'tv' , 'uses'=> 'Front_TvController@index'));
	
Route::get('videos/{id}', array('as'=>'videos' , 'uses'=> 'Front_TvController@getPlaylistVideos'));
Route::get('songs', array('as'=>'songs' , 'uses'=> 'Front_MusicController@index'));

// END FRONT ROUTES

// ADMIN ROUTES

Route::get('updatetv', array('as'=>'updatetv' , 'uses'=> 'Admin_TvController@update'));



Route::any('admin/dashboard', array('as'=>'admin.dashboard' , 'uses'=>'AdminController@getDashboard'));
// Route::any('admin/bands', array('as'=>'admin.bands' , 'uses'=>'Admin_BandsController@getIndex'));
// Route::any('admin/bands/add', array('as'=>'admin.addBand' , 'uses'=>'Admin_BandsController@addBand'));
// Route::any('admin/bands/submit', array('as'=>'admin.submitBand' , 'uses'=>'Admin_BandsController@submitBand'));
// Route::any('admin/bands/submitimage', array('as'=>'admin.submitImage' , 'uses'=>'Admin_BandsController@submitImage'));

Route::get('admin', array('as'=>'admin' , 'uses'=> 'UserController@login'));
// Route::controller('admin/{action}/{name}', 'AdminController');


Route::controller('admin/bands', 'Admin_BandsController', array('getView'=>'admin.bands'));
Route::controller('admin/bands/{action}/{name?}', 'Admin_BandsController');
// Route::controller('admin/bunticles', 'Admin_BunticlesController');

// END ADMIN ROUTES

// JSON REQUESTS

// Route::get('admin/getusers', array('as'=>'getusers' , 'uses'=>'Admin_BandsController@getusers'));




// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');
Route::get( 'user/logout',                 'UserController@logout');

Route::get('createperm', function(){
$user = User::where('username', '=', 'adminas')->first();
var_dump($user->can("manage_posts"));
});
// END Confide routes