@extends('plantilla')

@section('central')

{!! Form::open(['route'=>'administrador.index', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

	<div class="panel panel-info">
	    
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	      Iniciar Sesión
	      </h4>
	    </div>
		 <div class="panel-body">

			<div class="form-group">
				<!-- <label class="col-xs-12 col-sm-5 control-label" for="Usuario">Nombre de Usuario:</label> -->

				{!! Form::label('usuario', 'Nombre de Usuario', 
							   ['class'=>' control-label col-xs-12 col-sm-5 control-label']) !!}
				
				<div class="col-xs-12 col-sm-4">
				
				<!-- <input class="form-control" id="Usuario" type="text" onchange="this.value=this.value.toUpperCase();" placeholder="Nombre de Usuario" required></input> -->

				<!-- SI NO PONGO LOS ATRIBUTOS DENTRO DEL ARRAY
				'required' NO FUNCIONA! -->
				{!! Form::text('usuario', null, 
							  array('class'=>'form-control',
								   'required', 
								   'placeholder'=>'Nombre de Usuario',
								   'onchange'=>'this.value=this.value.toUpperCase();'))
				!!}

				</div> 
			</div>

			<div class="form-group">
				<!-- <label class="col-xs-12 col-sm-5 control-label" for="Contrasena">Contraseña:</label> -->
				{!! Form::label('contraseña', 'Contraseña', 
							   ['class'=>' control-label col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				<!-- <input class="form-control" id="Contrasena" type="password" placeholder="Contraseña" required></input> -->
				{!!Form::password('contraseña', 
							   array('class'=>'form-control',
							   		 'required',
							   		 'placeholder'=>'Contraseña',
							   		 'onchange'=>'this.value=this.value.toUpperCase();'
							   		)
							 )
				!!}
				</div>
			</div>

			
			<a class="row" href="#">Olvidé mi contraseña :(</a>
			<br>
			<button class="btn btn-default" type="submit" name="Entrar" id="Entrar" value="Entrar">Entrar</button>
			

		 </div>
			
	</div>
  {!! Form::close() !!}

@endsection