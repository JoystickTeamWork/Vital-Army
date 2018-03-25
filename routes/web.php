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

/*
/
/ Principales rutas para mostrar todos los pedidos de Vital Army
/ 
/
/
*/

/*
/
/ Ver todos los registros de pedidos
/
*/

Route::get('/pedidos', [
	'uses' => 'PedidosController@todos',
	'as' => 'pedidos',
]);




/*
/
/ Ver un solo registro de pedido
/
*/

Route::get('/pedidos/ver/{id}', [
	'uses' => 'PedidosController@ver',
	'as' => 'pedidos.ver',
]);




/*
/
/ Ver formulario para agregar un registro de pedido
/
*/

Route::get('/pedidos/agregar', [
	'uses' => 'PedidosController@agregar',
	'as' => 'pedidos.agregar',
]);




/*
/
/ Procesar formulario y agregar un registro de pedido
/
*/

Route::post('/pedidos/insert', [
	'uses' => 'PedidosController@insert',
	'as' => 'pedidos.insert',
]);




/*
/
/ Procesar formulario y agregar un producto al carrito de compras
/
*/

Route::post('/carrito/agregar', [
	'uses' => 'PedidosController@agregarProductoCarrito',
	'as' => 'carrito.agregar',
]);



/*
/
/ Borrar un producto del carrito
/
*/

Route::get('/carrito/borrar/{id}', [
	'uses' => 'PedidosController@BorrarProductoCarrito',
	'as' => 'carrito.borrar',
]);


Auth::routes();