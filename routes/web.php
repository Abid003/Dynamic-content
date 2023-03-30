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
    return view('fontend.welcome');
});

Route::get('/about', function () {
    return view('fontend.about');
});

Route::get('/services', function () {
    return view('fontend.services');
});

Route::get('/contact', function () {
    return view('fontend.contact');
});


//admin
Auth::routes();

Route::post('/home',[UserController::class, 'home']);
Route::get('/editprice',[UserController::class, 'editprice']);
Route::get('/logout',[UserController::class, 'logout']);


Route::get('/editprice', function () {
    return view('fontend.editprice');
});