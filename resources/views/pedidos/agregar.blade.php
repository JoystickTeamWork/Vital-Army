@extends('layouts.basic')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-xl-6">
			<h3>Completa el formulario</h3>
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

				<input type="submit" class="btn btn-success btn-lg" value="Agregar" name="submit">
				<input type="reset" class="btn btn-danger btn-lg" value="Cancelar" name="submit">
				
			</form>
		</div>
	</div>
</div>

@stop