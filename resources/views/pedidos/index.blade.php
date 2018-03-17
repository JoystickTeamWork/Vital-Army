<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Vital Army</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
<!-- Contenido principal -->

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
								<button class="btn btn-sm btn-primary">Ver</button>
								<button class="btn btn-sm btn-success">Actualizar</button>
								<button class="btn btn-sm btn-danger">Eliminar</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


</body>
</html>