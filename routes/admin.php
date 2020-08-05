<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/admin',function() {

    return "welcome";
});

Route::group(['namespace'=>'Front'],function(){

    Route::get('users','UserController@showAdminName');
});
//,'middleware' => 'auth'
Route::group(['namespace'=>'Front','prefix' => 'users'],function(){

    Route::get('ali',function(){

        return 'hello  ali';

    });


    Route::get('one','UserController@showAdminName');

});

// Route::get('login',function(){
//     return "access";
// }) ->name('login');

Route::resource('news', 'NewController');

Route::get('index','Front\UserController@getIndex');

Route::get('/','Front\UserController@getIndex');

Route::get('landing','Front\UserController@landing');

Route::get('about','Front\UserController@about');

