<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Routes;

class RoutesController extends Controller
{
    public function index(){
        return view('routes')
        ->with('route', Routes::all());;
        

        //echo $routes;
        //return view('routes.index', ['routes' => $routes]);
       // return view('userHome');

       
    }
    //
   /* public function store(Request $request){
        #dd($request->name);
        $name= $request->input('name');
        


    }*/
}
    //

