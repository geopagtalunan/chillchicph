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
 
Route::get('/', function () {
    return view('layouts.app');
});
 
//Add this to prevent error when refreshing page. The code is defining a catch-all route in a Laravel web application's.
Route::get('/{any?}', function () {
    return view('layouts.app');
})->where('any','.*');