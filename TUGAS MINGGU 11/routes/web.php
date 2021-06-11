<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\niasticontrollers;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\Backend\DashboardController;
// use App\Http\Controllers\Backend\PendidikanController;
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

Route::get('/', function(){
  return view('welcome');
});

/* Route::group(['namespace'=> 'Frontend'], function()
    {
        Route::resource('home', 'HomeController');
    });
    Route::group(['namespace'=>'backend'], function()
    {
      Route::resource('admin','DashboardController');
    }); */


Route::resource('/dashboard', DashboardController::class);

Route::resource('home', HomeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['web' , 'auth'])->group(function() {
    Route::group(['namespace' => 'Backend'], function()
    {
        Route::resource('dashboard', DashboardController::class);
        Route::resource('pendidikan', PendidikanController::class);
    });
});
