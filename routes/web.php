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




Route::get('/','App\Http\Controllers\RegistrationController@main');


/**Route::post('1',function (){

    return view('1');
});
Route::get('1',function (){

    return view('1');
});**/



//Route::get('/register','\App\Http\Controllers\RegistrationController@index');
//Route::post('/register','App\Http\Controllers\RegistrationController@store');


//Route::resource('register', App\Http\Controllers\RegistrationController::class)
 //   ->only('index','store');

//Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('register','App\Http\Controllers\RegistrationController@register');
Route::post('login','App\Http\Controllers\RegistrationController@login');
Route::get('login','App\Http\Controllers\RegistrationController@login');
Route::post('logout','App\Http\Controllers\RegistrationController@logout');
