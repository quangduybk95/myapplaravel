<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello/{name}/{age}', 'ControllerHello@hello');
Route::get('/hello', 'ControllerHello@hello2');
Route::get('/hello', 'ControllerHello@hello2');
Route::get('/readbook', 'ReadBook@index');
Route::get('/danhsachtruyen','ReadBook@getAllTruyen');	
Route::get('home','ReadBook@getAllTruyen');	
Route::get('home/add','ReadBook@insert');	