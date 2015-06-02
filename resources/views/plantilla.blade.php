<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>SOCIN</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<!-- OTRO modo de usar  blade para usar estilos --> 	
		{!! Html::style(asset('css/bootstrap.min.css')) !!}

	</head>
	
	<body>
		<div class="container text-center">
			<div class="container">
		
				<header>
					<div class="container" align="center">
						<img src="/img/logo.png" class="img-responsive" alt="Imagen responsive">
						<h1>Inventario de Albercas y Jacuzzis</h1>
					</div>
				</header>
			</div>

			<div class="div container">
				@yield('central')
			</div>

			<div class="navbar navbar-default container-fluid"> <!--ADD THIS CLASS TO LET THIS SECTION TO BOTTON 'navbar-fixed-bottom'-->
				<h4><strong>Abigail Velazquez Garcia</strong></h4>
				Ingenieria en Sistemas Computacionales. En caso de dudas o aclaraciones, favor de comunicarse al siguiente numero: (646) 194 53 18
			</div>

		</div>

			<!-- jQuery -->
			<script src="js/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="js/bootstrap.min.js"></script>

	</body>
</html>

	