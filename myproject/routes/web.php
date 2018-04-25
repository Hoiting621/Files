<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function(){
	return view('front');
	

});*/
//Route::get('/', 'UserController@index');
Route::get('/','UserController@front');
Route::post('/','UserController@storeFront')->name('login.store');
/*Route::get('/createUsers', function(){
	return view('createUser');
});*/
Route::get('/createUsers', 'UserController@index');
Route::post('/createUsers','UserController@store')->name('user.store');

Route::get('/home', 'UserController@index2');
Route::post('/home','UserController@store2')->name('home.store');

Route::get('/FitnessProfile', 'FitnessController@index');
Route::get('/FitnessProfileEdit', 'FitnessController@create');
Route::post('/FitnessProfileEdit', 'FitnessController@create2')->name('update.info');


Route::get('/Plans', 'PlansController@index');
Route::get('/Routes', 'RoutesController@index');


//Route::get('/','RoutesController@index');
//Route::get('/','PlansController@index');
//Route::get('/','FitnessController@index');



/*Route::get('/', function(){
	return view('sent');
});*/