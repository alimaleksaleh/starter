<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use stdClass;

class UserController extends Controller
{
    public function showAdminName(){
        return " ali saleh";
    }


    public function getIndex(){

        $data=[
            'name'=>'ali',
            'age'=>24
        ];

        // $obj = new \stdClass();
        // $obj -> name ='ali';
        // $obj -> age ='23';
        // compact('obj')
        return view('welcome',$data);  //->with(['age'=>24,'name'=>'ali'])
    }

    public function landing(){
        return view('landing');
    }

    public function about(){
        return view('about');
    }


}
