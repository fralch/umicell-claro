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


Route::get('/registro_compras', function () {
    return view('/compra/registro_compras');
});


Route::get('/compra', 'CompraController@index');
Route::get('/compra/nueva', 'CompraController@nueva_compra')->name('compra_nueva');
Route::get('/compra/nueva/guardar/', 'CompraController@guardar_nueva_compra');
Route::get('/compra/fecha', 'CompraController@comprasxfechas');
Route::get('/compra/detalle/{id}', 'CompraController@compra_detalle')->name('compra_detalle');
Route::get('/compra/detalles/editar_producto/{id}', 'CompraController@editar_producto_compra');
Route::get('/compra/detalles/editar_producto_guardar', 'CompraController@editar_producto_compra_guardar');
Route::get('/compra/detalle/producto/{id}', 'CompraController@eliminar_producto_compra');
Route::get('/registro_compras', function(){ return view('compra.registro_compras');});
Route::get('/compra/guardar_suma_producto/{id}', 'CompraController@guardar_suma_productos');
Route::get('/compra/listar_producto', 'ProductoController@index')->name('lista_de_productos');
Route::get('/compra/listar_producto/busqueda', 'ProductoController@productos_all');
Route::get('/compra/guardar_lista_productos', 'ProductoController@guardar_lista_productos');

Route::get('/validar_login', 'UsuarioController@validarUsuario');

