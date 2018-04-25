<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FitnessProfile;

class FitnessController extends Controller
{
    public function index(){
       /* $profile=FitnessProfile::all();
        foreach ($profile as $profiles)
        echo $profiles->weight;*/

       return view('Healthprofile')
        ->with('weights', FitnessProfile::all());

       
        //Route::get('/','RoutesController@index');


        //echo $routes;
        //return view('routes.index', ['routes' => $routes]);
       // return view('userHome');

       
    }
    public function create(Request $request){


        return view('EditFitness')
        ->with('weights', FitnessProfile::all());

         
         //return view('EditFitness')
            
    /* $plans = DB::table('fitness_profiles')->get();
        dd($plans); */
    //
        }
        public function create2(Request $request){
            $profile=FitnessProfile::all();
            $this->validate($request,[
                'weight'=>'required',
                'height'=>'required'
                //'Blood Type'=>'required',
                //'Gender'=>'required'
            ]);
            $weight= $request->input('weight');
            $height= $request->input('height');
            $bloodType= $request->input('bloodType');
            $Gender= $request->input('Gender');


        //$data=array('weight'=>$weight,'height'=>$height
        //, 'Blood Type'=>$BloodType, 'Gender'=>$Gender);
        
        $profile[1]->weight=$weight;
        $profile[1]->height=$height;
        $profile[1]->bloodType=$bloodType;
        $profile[1]->gender=$Gender;


        $profile[1]->save();
        return view('Healthprofile')
        ->with('weights', FitnessProfile::all());

            
            }       
}
