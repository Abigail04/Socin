<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Baja de Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>
<body>
<div class="container text-center">
	
	<header>
		<div class="container" align="center">
			<img src="img/logo.png" class="img-responsive" alt="Imagen responsive">
			<h1>Inventario de Albercas y Jacuzzis</h1>
		</div>
	</header>

<form class="form-horizontal" role="form" action="index_submit" method="get" accept-charset="utf-8">

	  <div class="panel panel-info">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	      Datos del Producto
	      </h4>
	    </div>
		 <div class="panel-body">
		 	<br>
			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Id_producto">Id del producto:</label>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" id="Id_producto" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Id del producto" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Descripcion">Descripción:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Descripcion" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Descripción" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Unidad">Unidad: </label>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" id="Unidad" type="text" onchange="this.value=this.value.toUpperCase();"placeholder="Unidad" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Precio_C">Precio de compra:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Precio_C" type="text" placeholder="Precio de compra" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Precio_V">Precio de venta:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Precio_V" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Precio de venta" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Cantidad">Cantidad:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Cantidad" type="text" placeholder="Cantidad"></input>
				</div>
			</div>

			<button class="btn btn-default" type="submit" name="Guardar" id="Guardar" value="Enviar">Guardar</button>
			<a class="btn btn-default" href="#" role="button">Cancelar</a>

		 </div>
			
		</div>
	</form>

	
	
		

		
	

</div> <!-- CONTAINER SIG->BODY -->
	

	
				<!-- jQuery -->
				<script src      ="js/jquery.js"></script>
				<!-- Bootstrap JavaScript -->
				<script src      ="js/bootstrap.min.js"></script>
</body>
</html>