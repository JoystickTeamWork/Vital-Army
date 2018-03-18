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
		* Vista de formulario para agregar un pedido
		*
		* @access public
		*
		**/

		public function agregar()
		{

			return view('pedidos.agregar');
			
		}

		/**
		*
		* Procesar información de formulario y agregar un registro a la base de datos
		* @access public
		*
		*/

		public function insert(Request $request)
		{

			$pedido = new Pedido;
			$pedido->number = rand(111111, 999999);
			$pedido->buyer = $request->buyer;
			$pedido->payment_method = $request->payment_method;
			$pedido->payment_id = $request->payment_id;
			$pedido->carrier = $request->carrier;
			$pedido->carrier_guide = $request->carrier_guide;
			$pedido->total = $request->total;
			$pedido->status = $request->status;
			return ($pedido->save()) ? redirect()->route('pedidos') : back()->withInput();
		}

}
