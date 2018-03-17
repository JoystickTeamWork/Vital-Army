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
]);


/*
/
/ Ver un solo registro de pedido
/
*/

Route::get('/pedidos/ver/{id}', [
	'uses' => 'PedidosController@ver'
]);

/*
/
/ Agregar un registro de pedido
/
*/

Route::post('/pedidos/add', [
	'uses' => 'PedidosController@add',
	'as' => 'pedidos.add',
]);

