@extends('layouts.basic')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-xl-6">
			<h3>Pedido {{$pedido->number}}</h3>
			<br>
			<div class="form-group">
				<small>Nombre del comprador</small>
				<p>{{$pedido->buyer}}</p>
			</div>

			<div class="form-group">
				<small>Metodo de pago</small>
				<p>{{$pedido->payment_method}}</p>
			</div>

			<div class="form-group">
				<small>Número de pago</small>
				<p>{{$pedido->payment_id}}</p>
			</div>

			<div class="form-group">
				<small>Monto total</small>
				<p>{{"$".number_format($pedido->total,2,".",",")}}</p>
			</div>

			<div class="form-group">
				<small>Paquetería</small>
				<p>{{$pedido->carrier}}</p>
			</div>

			@php
			$carriers = [
				'FedEx' => 'https://www.fedex.com/apps/fedextrack/index.html?tracknumbers=',
				'DHL' => 'http://www.dhl.com.mx/es/express/rastreo.html?AWB=',
				'Redpack' => 'http://www.redpack.com.mx/',
				'Estafeta' => 'http://www.estafeta.com/Rastreo/',
			];
			@endphp

			<div class="form-group">
				<small>Número de guía</small>
				@foreach($carriers as $key => $value)
					@if($key == $pedido->carrier)
						<p><a href="{{$value.$pedido->carrier_guide}}" target="_blank">{{$pedido->carrier_guide}}</a></p>
					@endif
				@endforeach
			</div>

			<div class="form-group">
				<small>Estado del pedido</small><br>
				@if($pedido->status == 1)
					<span class="btn btn-warning btn-sm"><i class="fa fa-clock-o"></i> Procesando</span>
				@endif

				@if($pedido->status == 2)
					<span class="btn btn-warning btn-sm"><i class="fa fa-truck"></i> En espera de recolección</span>
				@endif

				@if($pedido->status == 3)
					<span class="btn btn-primary btn-sm"><i class="fa fa-car"></i> En tránsito</span>
				@endif

				@if($pedido->status == 4)
					<span class="btn btn-primary btn-sm"><i class="fa fa-building"></i> En sucursal de paquetería</span>
				@endif

				@if($pedido->status == 5)
					<span class="btn btn-success btn-sm"><i class="fa fa-check"></i> Completado</span>
				@endif

				@if($pedido->status == 6)
					<span class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Cancelado</span>
				@endif
			</div>
		</div>
	</div>
</div>



@stop