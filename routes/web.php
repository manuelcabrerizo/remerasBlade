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

Route::get('/', function () {
    return view('welcome');
});

Route::get('fotbol', 'remerasController@listado');


Route::get('faq', 'faqlController@mostarView');
Route::get('contacto', 'contactoController@mostarView');
Route::get('home', 'homeController@mostarView');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
