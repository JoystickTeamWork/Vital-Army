<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Pedido_metas;
use App\Http\Controllers\Session;
use App\Http\Controllers\Pedido_metaController;
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

			$pedidos = Pedido::all()->sortByDesc('id');
			$total = Pedido::all()->sum('total');


			return view('pedidos.index', [
				'pedidos' => $pedidos,
				'total' => $total,
			]);


		}


		/**
		*
		* Vista para visualizar un solo pedido
		*
		* @access public
		*
		**/

		public function ver($id)
		{

			if (!is_numeric($id)) {
				return redirect()->route('pedidos', ['msj' => 'error']);
			}

			if (!$pedido = Pedido::find($id)) {
				return redirect()->route('pedidos', ['msj' => 'not-found']);
			}


			return view('pedidos.ver' , ['pedido' => $pedido]);


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
			
			$productos = session('carrito');
			return view('pedidos.agregar' , ['productos' => $productos]);
			
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
			$id = $pedido->save();

			$pedido_meta = new Pedido_meta;
			foreach (session('carrito') as $producto) {
				$pedido_meta->id_pedido = $id;
				$pedido_meta->model = $producto['model'];
				$pedido_meta->size = $producto['size'];
				$pedido_meta->color = $producto['color'];
				$pedido_meta->quantity = $producto['quantity'];
				$pedido_meta->price = $producto['price'];
				$pedido_meta->save();
			}
			return redirect()->route('pedidos');
		}



	/**
	*
	* Agrega un producto al carrito de compras
	* @access private
	*
	*/

	public function agregarProductoCarrito(Request $request)
	{
		if(session()->has('carrito')){
			$disponible = 0;
			$productos = session()->get('carrito');

			foreach ($productos as $producto) {

				if ($producto['model'] == $request->model &&
				$producto['size'] == $request->size &&
				$producto['color'] == strtoupper($request->color)) {

					$disponible ++;
					$producto['quantity'] = intval($request->quantity);
					$producto['price'] = floatval($request->price);
					$producto['total'] = floatval($request->quantity * $request->price);
					session(['carrito' => [$producto]]);
				}
			}
			if ($disponible < 1) {
				$producto_item['id'] = rand(111111,999999);
				$producto_item['model'] = $request->model;
				$producto_item['size'] = $request->size;
				$producto_item['color'] = strtoupper($request->color);
				$producto_item['quantity'] = intval($request->quantity);
				$producto_item['price'] = floatval($request->price);
				$producto_item['total'] = floatval($request->quantity * $request->price);
				session()->push('carrito' , $producto_item);
			}
		} else {
			$producto_item['id'] = rand(111111,999999);
			$producto_item['model'] = $request->model;
			$producto_item['size'] = $request->size;
			$producto_item['color'] = strtoupper($request->color);
			$producto_item['quantity'] = intval($request->quantity);
			$producto_item['price'] = floatval($request->price);
			$producto_item['total'] = floatval($request->quantity * $request->price);
			session()->push('carrito' , $producto_item);
		}
		return redirect()->route('pedidos.agregar');
	}

	/**
	*
	* Borrar producto del carrito
	* @access private
	*
	*/
	public function BorrarProductoCarrito($id)
	{
		if (session()->has('carrito')) {

			$productos = session()->get('carrito');

			foreach ($productos as $key => $value) {

				if ($value['id'] == $id) {

					session()->forget('carrito.'.$key);

				}

			}

			if (count(session('carrito')) <= 0) {
				session()->forget('carrito');
			}

			return back();
		} else {
			return back()->withInput();
		}
	}




















}
