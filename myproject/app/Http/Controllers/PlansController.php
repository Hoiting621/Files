<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Plan;

class PlansController extends Controller
{
    public function index(){
        
        //Route::get('/','RoutesController@index');
        return view('Plans')
        ->with('plans', Plan::all());

        //echo $routes;
        //return view('routes.index', ['routes' => $routes]);
       // return view('userHome');

       
    }
    
}
