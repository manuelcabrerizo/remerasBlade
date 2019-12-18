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
    return redirect('home');
});
Route::get('faq', 'faqlController@mostarView');
Route::get('contacto', 'contactoController@mostarView');
Auth::routes();
Route::get('perfil', 'perfilController@mostarView');
Route::post('perfil', 'perfilController@save');
Route::get('update', 'perfilController@update');
Route::get('mostrarCrear', 'perfilController@mostrarCrear');
Route::post('mostrarCrear', 'perfilController@saveProduct');
Route::get('misProductos', 'perfilController@mostrarProductos');
Route::post('misProductos', 'perfilController@controlarProducto');
Route::post('modificarProducto', 'perfilController@modificarProducto');
Route::get('editarProducto', 'perfilController@editarProducto');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('carrito', 'HomeController@carritoView');
Route::post('carrito', 'HomeController@carritoAdd');
Route::post('eliminarCarrito', 'carritoController@carritoRemove');
Route::get('/producto{id}', 'mostrarMasController@mostrarView');
Route::post('carritoFinal', 'mostrarMasController@mostarCarro');
Route::get('datos', 'datosController@pedirDatos');
Route::post('guardarTarjeta', 'datosController@guardarDatos');
Route::post('guardarUbicacion', 'datosController@guardarUbicacion');
Route::get('usarTarjeta', 'datosController@usarTarjeta');
Route::get('usarUbicacion', 'datosController@usarUbicacion');
Route::post('comprar', 'datosController@compraAdd');
Route::get('misCompras', 'perfilController@mostrarCompras');
Route::post('mostrarMasPregunta', 'preguntasController@guardarPregunta');
Route::post('guardarRespuesta', 'respuestasController@guardarRespuesta');
