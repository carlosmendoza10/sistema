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

//Route::get('/empleados', 'App\Http\Controllers\EmpleadosController@index');

//Route::get('/empleados/create', 'App\Http\Controllers\EmpleadosController@create');
Route::resource('empleados', 'App\Http\Controllers\EmpleadosController')->middleware('auth');



Auth::routes();

Route::get('/home', ['App\Http\Controllers\EmpleadosController', 'index'])->name('home');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/', ['App\Http\Controllers\EmpleadosController', 'index'])->name('home');
} );
//[App\Http\Controllers\HomeController::class, 'index'])->name('home');