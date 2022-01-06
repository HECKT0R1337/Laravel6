<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct(){
        // if we put middleware inside controller with construct 
        // this means all methods must follow this middleware

        // $this -> middleware('auth'); 


        // THIS WILL Apply auth middleware on all methods except showString2
        $this -> middleware('auth')->except('showString2') ; 

    }

    public function showString0(){
        return 'second static string0';
    }

    public function showString1(){
        return 'second static string1';
    }
    public function showString2(){
        return 'second static string2';
    }
    public function showString3(){
        return 'second static string3';
    }
}
