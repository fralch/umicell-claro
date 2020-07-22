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
    return view('home');
});



Route::get('/compra', 'CompraController@index');
Route::get('/compra/fecha', 'CompraController@comprasxfechas');
Route::get('/compra/detalle/{id}', 'CompraController@compra_detalle');
Route::get('/compra/detalles/editar_producto/{id}', 'CompraController@editar_producto_compra');
Route::get('/compra/detalles/editar_producto_guardar', 'CompraController@editar_producto_compra_guardar');
Route::get('/compra/detalle/producto/{id}', 'CompraController@eliminar_producto_compra');
Route::get('/registro_compras', function(){ return view('compra.registro_compras');});
