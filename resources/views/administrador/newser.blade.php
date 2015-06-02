@extends('plantilla')

@section('central')

{!! Form::open(['route'=>'administrador.store', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
<!-- PRIMER PANEL -->
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-info">

                      @if ($errors->any())
                            <div class="alert alert-danger">
                               <p>Por favor corrige los errores</p>
                                  <ul>
                                      @foreach($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                      @endforeach
                                 </ul>
                            </div>
                      @endif

	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	        <!-- <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->
	      Datos personales
	        <!-- </a> -->
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">

			<div class="form-group">
				{!! Form::label('name', 'Nombre:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::text('name', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Nombre (s)',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('appaterno', 'Apellido Paterno:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('appaterno', null,
							  array('class'=>'form-control',
							  'required',
							  'placeholder'=>'Apellido paterno',
							  'onchange'=>'this.value=this.value.toUpperCase();'))
				!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('apmaterno', 'Apellido Materno:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::text('apmaterno', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Apellido materno',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('fecha', 'Fecha de Nacimiento:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::date('fecha', null,
							  array('class'=>'form-control',
							  'required',
							  'placeholder'=>'Año-Mes-Dia'))
				!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('direccion', 'Dirección:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('direccion', null,
							  array('class'=>'form-control',
							  'required',
							  'placeholder'=>'Colonia, Calle, Numero, C.P.',
							  'onchange'=>'this.value=this.value.toUpperCase();'))
				!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('telefono', 'Teléfono:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('telefono', null,
							  array('class'=>'form-control',
							  'required',
							  'placeholder'=>'(123) 456 78 90'))
				!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('celular', 'Celular:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('celular', null,
							  array('class'=>'form-control',
							  'required',
							  'placeholder'=>'(123) 456 78 90'))
				!!}
				</div>
			</div>

		      </div>
		    </div>
		  </div>
<!-- SEGUNDO PANEL -->
	  <div class="panel panel-info">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	        <!-- <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> -->
	          Datos de usuario
	        <!-- </a> -->
	      </h4>
	    </div>
	    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">

              <div class="form-group">
                  {!! Form::label('email', 'Correo Eléctronico:',
                  ['class'=>'col-xs-12 col-sm-5 control-label']) !!}
                  <div class="col-xs-12 col-sm-4">
                      {!! Form::email('email', null,
                      array('class'=>'form-control',
                      'required',
                      'placeholder'=>'ejemplo@hotmail.com'))
                      !!}
                  </div>
              </div>

			<div class="form-group">
				{!! Form::label('contrasena', 'Contraseña:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}	
				<div class="col-xs-12 col-sm-4">
				{!! Form::password('contrasena', 
							  array('class'=>'form-control',
				   		      'required', 
							  'placeholder'=>'Mínimo 8 caracteres',
					    	  'onchange'=>'this.value=this.value.toUpperCase();'))
				!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('repetir', 'Repetir contraseña:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::password('repetir', 
							  array('class'=>'form-control',
	       				      'required', 
					    	  'placeholder'=>'Repetir contraseña',
						   	  'onchange'=>'this.value=this.value.toUpperCase();'))
				!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('tipo', 'Tipo de usuario',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::select('tipo',['--Seleccione--','Administrador',
							  'Gerente','Empleado'], null, 
			   				  array('class'=>'form-control',
						      'required'=>'required'))
					!!}

				</div>	
			</div>

              <div class="form-group">
                  {!! Form::label('estado', 'Estado de usuario:',
                  ['class'=>'col-xs-12 col-sm-5 control-label']) !!}


                  <div class="col-md-2">
                      {!! Form::label('estado', 'Activo') !!}
                      {!! Form::radio('estado', 'Activo',
                      array('class'=>'radio-inline',
                      'true'))
                      !!}
                  </div>
              </div>
			
			<button class="btn btn-default" type="submit" name="Guardar" id="Guardar" value="Enviar">Guardar</button>
			<a class="btn btn-default" href="{{ route('administrador.index') }}" role="button">Cancelar</a>
			
      </div>
    </div>
  </div>
  {!! Form::close() !!}

@endsection