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

Route::get('/home', function () {
    return view(' dashboard');
});

Route::get('/login', function () {
    return view('auth.login1');
});


Route::get('/test', function () {
    return "Hello,World!";

});

Route::get('/admintest', function () {
    return view('admin.test');
});

Route::get('/projects', function () {
    return view('production.projects');
});


#Route::group(['prefix' => 'admin'], function () {
#    Voyager::routes();
#});
