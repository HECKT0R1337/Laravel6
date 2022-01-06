<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
  public function showUserName(){
      return 'mohamed esmail';
  }

  public function getIndex(){
    // return view('welcome');
    /*
      $data=[];
      $data['id']='hello';
      $data['name']='mohamed ahmed';
      return view('welcome',$data);
    */
////////////////////////
    $obj = new \stdClass();
    $obj -> name='mohamed';
    $obj -> id=5;
    $obj -> gender ='male';
    return view('welcome',compact('obj'));

    // return view('welcome') -> with ('name2','mohamed ahmed');

    $data=['a' => 'mohamed' , 'b'=> 'ahmed' , 'c' => 'ali'];
    return view('welcome',compact('data'));

    $data2=[];

  }

  public function getLanding(){
    return view('landing');
  }





}
