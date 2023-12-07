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
    return view('web/gallery');
});
Route::get('/add_photo',[userController::class,'index']);
Route::post('/add_photo',[userController::class,'store']);
Route::post('/gallery',[userController::class,'show']);