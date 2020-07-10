<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix'  => '/'],function(){
    Auth::routes();
    Route::get('/admin/dashboard','DashboardController@dashboard')->name('admin.dashboard');
});


Route::get('/home', 'HomeController@index')->name('home');
