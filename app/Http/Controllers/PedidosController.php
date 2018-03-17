<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    //



		/**
		*
		* Vista de todos los pedidos
		*
		* @access public
		*
		**/

		public function todos()
		{

			$pedidos = Pedido::all();


			return view('pedidos.index')->with('pedidos', $pedidos);


		}

		/**
		*
		* Agrega un registro a la base de datos
		* @access public
		*
		*/
		public function add(Request $request)
		{
			dd($request);
		}

}
