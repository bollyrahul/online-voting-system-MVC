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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/vault', function () {
    return view('vault');
});
Route::get('/vault', function () {
    return view('vault');
});
Route::get('/nomination', function () {
    return view('nomination');
});
Route::get('/index', function () {
    return view('index');
});




Route::get('/switchcase', function(){
    return view('switchhandle');
   });
   
   Route::post('/result', [SwitchController::class, 'index']);