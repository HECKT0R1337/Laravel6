<?php

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

use App\Http\Controllers\NewsController;
use PhpParser\Builder\Function_;

// Route::get('/', function () {
    // method#1// return view('welcome') -> with ('data','mohamed ahmed');
    // method#2// return view('welcome') -> with  (['string' => 'mohamed ahmed', 'age' => 34]);

    // method#3//
    /*
        $data=[];
        $data['id']=5;
        $data['name']='mohamed ahmed';
        return view('welcome',$data);
    */

// });




//Auth::routes();  // this is the default auth

Auth::routes(['verify'=> true]);  // ['verify'=> true] added to enable mail verification

Route::get('/home','HomeController@index') -> middleware('verified');

Route::get('/',function (){
    return 'home';
});


Route::get('/dashboard',function (){
    return 'dashboard';
});


/*
Route::get('index','Front\UserController@getIndex');



Route::get('/test1', function () {
    return ('welcome bro');
});



// route parameter
Route::get('/test2/{id}', function ($id) { // parameter id here is a must.
    return $id;
});

Route::get('/test3/{id?}', function () { // parameter id here is optional bcz we use ?
    return ('welcome');
});


//+-- linked to welcome.blade.php
Route::get('/show-number/{id}', function ($id) { // parameter id here is a must.
    return $id;
}) -> name('a');

Route::get('/show-string/{id?}', function () { // parameter id here is optional bcz we use ?
    return ('welcome');
}) -> name('b');




//route name

Route::namespace('Front')->group(function(){
    // all routes only access controller or methods in folder name Front
    // Route::get('users','UserController@showUserName');


});


// Route::prefix('users')->group(function(){
//     Route::get('show','UserController@showUserName');
//     Route::delete('delete','UserController@showUserName');
//     Route::get('edit','UserController@showUserName');
//     Route::put('Update','UserController@showUserName');
// });




// middle ware writting methods inside Route
//middleware used to set restriction on who have autorities to open specific link which added in Route
// 1- this method is preferred while using middleware
Route::group(['prefix' => 'users', 'middleware' => 'auth'],function(){
    // set of routes
    Route::GET('/',Function(){
        return 'work';
    });

    // Route::get('show','UserController@showUserName');
    // Route::delete('delete','UserController@showUserName');
    // Route::get('edit','UserController@showUserName');
    // Route::put('Update','UserController@showUserName');
});


// 2-
Route::get('check',function(){
    return 'middleware';
}) -> middleware('auth')
;


//////////////////////////////

Route::get('landing','Front\UserController@getLanding');


    Route::get('/landing', function () {
        return view('landing');
    });



Route::get('first','Front\FirstController@showString');
Route::get('second','Admin\SecondController@showString0');


Route::group(['namespace' => 'Admin'] , function(){
    Route::get('second','SecondController@showString0') -> middleware('auth');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
    Route::get('second3','SecondController@showString3');

});

Route::get('login',function(){
    return 'you must be logged in to access this route';
}) -> name('login');



// other method to change using of namespace inside the route

    Route::group(['namespace' => 'Admin'],function(){
     Route::get('second','SecondController@showString');
    });


Route::resource('news','NewsController');


// php artisan route:list
// php artisan make:controller NewsController --resource
/*
Route::get('news','NewsController@index');
Route::post('news','NewsController@Store');
Route::get('news/create','NewsController@create');
Route::get('news/{id}/edit','NewsController@edit');
Route::put('update/{id}','NewsController@edit');
Route::delete('news/{id}','NewsController@delete');




Route::get('about',function(){
    return view('about');
});

Route::get('/',function(){
    return view('home');
});



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/


