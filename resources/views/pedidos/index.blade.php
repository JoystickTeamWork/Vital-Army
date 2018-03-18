@extends('layouts.basic')

@section('contenido')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
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
						<th>Método de pago</th>
						<th>Número de pago</th>
						<th>Total</th>
						<th>Fecha</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pedidos as $pedido)
						<tr>
							<td>{{$pedido->number}}</td>
							<td>{{$pedido->payment_method}}</td>
							<td>{{$pedido->payment_id}}</td>
							<td>{{'$'.number_format($pedido->total, 2 , "." , ",")}}</td>
							<td>{{$pedido->created_at}}</td>
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

