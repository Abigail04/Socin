<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Baja de Usuario</title>
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
<!-- PRIMER PANEL -->
	  <div class="panel panel-info">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	      Información Personal
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
			<br>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Id">Id de usuario:</label>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" id="Id" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Id de usuario" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Nombre">Nombre:</label>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" id="Nombre" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Nombre" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="ApellidoP">Apellido Paterno:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="ApellidoP" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Apellido Paterno" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="ApellidoM">Apellido Materno:</label>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" id="ApellidoM" type="text" onchange="this.value=this.value.toUpperCase();"placeholder="Apellido Materno" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Nacimiento">Fecha de Nacimiento:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Nacimiento" type="date" placeholder="Fecha de Nacimiento" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Direccion">Dirección:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Direccion" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Calle, Numero, Colonia, C.P." required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Telefono">Teléfono:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Telefono" type="text" placeholder="Teléfono"></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Celular">Celular:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Celular" type="text" placeholder="Celular" required></input>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-5 control-label" for="Email">Correo Electrónico:</label>
				<div class="col-xs-12 col-sm-4">
				<input class="form-control" id="Email" type="email" placeholder="Correo Electrónico" required></input>
				</div>
			</div>
			
			<button class="btn btn-default" type="submit" name="Guardar" id="Guardar" value="Enviar">Eliminar</button>
			<a class="btn btn-default" href="#" role="button">Cancelar</a>
		    
		      </div>
		    </div>
		  </div>

			
    <!-- </div> -->
</form>	
<!-- </div> -->



	
	
		

		
	

</div> <!-- CONTAINER SIG->BODY -->
	

	
				<!-- jQuery -->
				<script src      ="js/jquery.js"></script>
				<!-- Bootstrap JavaScript -->
				<script src      ="js/bootstrap.min.js"></script>
</body>
</html>