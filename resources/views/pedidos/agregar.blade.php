@extends('layouts.basic')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<h3>Completa el formulario</h3>
				<div class="row">
					<div class="col-xl-6">
						<form action="/pedidos/insert" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<label for="">Nombre del comprador</label>
								<input type="text" class="form-control" name="buyer">
							</div>

							<div class="form-group">
								<label for="">Monto total</label>
								<input type="text" class="form-control" name="total">
							</div>

							<div class="form-group">
								<label for="">Metodo de pago</label>
								<select name="payment_method" id="" class="form-control">
									<option value="Mercado Pago">Mercado Pago</option>
									<option value="PayPal">PayPal</option>
									<option value="Transferencia">Transferencia</option>
									<option value="Efectivo">Efectivo</option>
									<option value="Pendiente">Pendiente</option>
								</select>
							</div>

							<div class="form-group">
								<label for="">Número de pago</label>
								<input type="text" class="form-control" name="payment_id" pattern="[0-9a-zA-Z]+">
							</div>

							<div class="form-group">
								<label for="">Paquetería</label>
								<select name="carrier" id="" class="form-control">
									<option value="FedEx">FedEx</option>
									<option value="DHL">DHL</option>
									<option value="Redpack">Redpack</option>
									<option value="Estafeta">Estafeta</option>
								</select>
							</div>

							<div class="form-group">
								<label for="">Guía</label>
								<input type="text" class="form-control" name="carrier_guide" pattern="[0-9a-zA-Z]+">
							</div>

							<div class="form-group">
								<label for="">Estado del pedido</label>
								<select name="status" id="" class="form-control">
									<option value="1">Procesando</option>
									<option value="2">En espera de recolección</option>
									<option value="3">En tránsito</option>
									<option value="4">En sucursal de paquetería</option>
									<option value="5">Completado</option>
									<option value="6">Cancelado</option>
								</select>
							</div>
							<hr>
							<input type="submit" class="btn btn-success btn-lg" value="Agregar" name="submit">
							<input type="reset" class="btn btn-danger btn-lg" value="Cancelar" name="reset">
						</form>
					</div>

					<div class="col-xl-6">
						
						<form action="{{route('carrito.agregar')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<label for="">Modelo</label>
								<input type="text" class="form-control" name="model">
							</div>

							<div class="form-group">
								<label for="">Talla</label>
								<select name="size" class="form-control">
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
							</div>

							<div class="form-group">
								<label for="">Color</label>
								<input type="text" class="form-control" name="color" pattern="[a-zA-ZnñáéíóúÁÉÍÓÚ]+">
							</div>

							<div class="form-group">
								<label for="">Cantidad</label>
								<input type="text" class="form-control" name="quantity" pattern="[0-9]+">
							</div>

							<div class="form-group">
								<label for="">Precio unitario</label>
								<input type="text" class="form-control" name="price" pattern="[0-9\.]+">
							</div>
							<hr>
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button>
							<button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-minus"></i></button>
						</form>
					</div>
				</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xl-12">
			<h3>Productos en el carrito</h3>
			<p>Productos agregados recientemente.</p>
		</div>
		<div class="col-xl-12">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Modelo</th>
						<th>Talla</th>
						<th>Color</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Subtotal</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($productos))
						@foreach($productos as $producto)
							<tr>
								<td>{{$producto['model']}}</td>
								<td>{{$producto['size']}}</td>
								<td>{{$producto['color']}}</td>
								<td>{{$producto['quantity']}}</td>
								<td>{{"$".number_format($producto['price'],2,".",",")}}</td>
								<td>{{"$".number_format($producto['total'],2,".",",")}}</td>
								<td>
									<a href="{{route('carrito.borrar' , ['id' => $producto['id']])}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="7">No hay productos en el carrito</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
	<br>
</div>

@stop