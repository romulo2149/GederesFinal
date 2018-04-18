<?php

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

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/IniciarSesion', function(){return view('auth/login');})->name('login');
Route::get('/Registrarse', function(){return view('auth/register');})->name('register');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
