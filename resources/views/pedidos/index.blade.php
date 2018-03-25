@extends('layouts.basic')

@section('contenido')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Ventas totales {{count($pedidos)}}</h1>
    <p>Total generado {{"$".number_format($total,2,".",",")}}.</p>
    <p><a class="btn btn-primary btn-lg" href="{{route('pedidos.agregar')}}" role="button">Agregar pedido &raquo;</a></p>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<h2>Todos los pedidos</h2>
		</div>
	</div>
	<div class="row">

		<div class="col">

			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Número</th>
						<th>Comprador</th>
						<th>Método de pago</th>
						<th>Número de pago</th>
						<th>Total</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pedidos as $pedido)
						<tr>
							<td><a href="{{route('pedidos.ver', ['id' => $pedido->id])}}">{{$pedido->number}}</a></td>
							<td>{{$pedido->buyer}}</td>
							<td>{{$pedido->payment_method}}</td>
							<td>{{$pedido->payment_id}}</td>
							<td>{{'$'.number_format($pedido->total, 2 , "." , ",")}}</td>
							<td>
								<a class="btn btn-sm btn-primary" href="{{route('pedidos.ver' , ['id' => $pedido->id])}}">Ver</a>
								<a class="btn btn-sm btn-success text-white" href="{{route('pedidos.ver' , ['id' => $pedido->id])}}">Actualizar</a>
								<a class="btn btn-sm btn-danger text-white" href="{{route('pedidos.ver' , ['id' => $pedido->id])}}">Eliminar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop

