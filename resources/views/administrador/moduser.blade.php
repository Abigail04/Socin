@extends('plantilla')

@section('central')
    {!! Form::model($user, ['route'=>['administrador.update', $user], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}
<!-- PRIMER PANEL -->
	  <div class="panel panel-info">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <p>Por favor corrija los errores</p>
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	      Editar usuario: Id:  {{ $user->id }}
	      </h4>
	    </div>
	      <div class="panel-body">


			<div class="form-group">
				{!! Form::label('name', 'Nombre:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::text('name', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Nombre',
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
							  'placeholder'=>'Fecha de nacimiento'))
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
							  'placeholder'=>'Direccion',
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
							  'placeholder'=>'Teléfono'))
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
							  'placeholder'=>'Celular'))
				!!}
				</div>
			</div>

		    </div>
		  </div>
<!-- SEGUNDO PANEL -->
	  <div class="panel panel-info">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	          Datos de usuario
	      </h4>
	    </div>

	      <div class="panel-body">

              <div class="form-group">
                  {!! Form::label('email', 'Correo Eléctronico:',
                  ['class'=>'col-xs-12 col-sm-5 control-label']) !!}
                  <div class="col-xs-12 col-sm-4">
                      {!! Form::email('email', null,
                      array('class'=>'form-control',
                      'required',
                      'placeholder'=>'Correo Electrónico'))
                      !!}
                  </div>
              </div>

			<div class="form-group">
				{!! Form::label('contrasena', 'Contraseña:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}	
				<div class="col-xs-12 col-sm-4">
				{!! Form::password('contrasena', 
							  array('class'=>'form-control',
							  'placeholder'=>'Contraseña',
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
					    	  'placeholder'=>'Repetir contraseña',
						   	  'onchange'=>'this.value=this.value.toUpperCase();'))
				!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('tipo', 'Tipo de usuario:',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::select('tipo',['--Seleccione--','Administrador',
							  'Gerente','Empleado'], null, 
			   				  array('class'=>'form-control',
						      'required'))
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
                      'required'))
                      !!}
                  </div>
                  <div class="col-md-2">
                      {!! Form::label('estado', 'Inactivo') !!}
                      {!! Form::radio('estado', 'Inactivo',
                      array('class'=>'radio-inline',
                      'required'))
                      !!}
                  </div>
              </div>

			<button class="btn btn-default" type="submit" name="Guardar" id="Guardar" value="Enviar">Actualizar usuario</button>
			<a class="btn btn-default" href="{{ route('users.index') }}" role="button">Cancelar</a>
          </div>
  {!! Form::close() !!}

          {{--{!! Form::open(['route'=>['administrador.destroy', $user], 'method'=>'DELETE', 'class'=>'form-horizontal']) !!}--}}
          {{--<button class="btn btn-danger" type="submit" name="Eliminar" id="Eliminar" value="Enviar">Eliminar usuario</button>--}}
          {{--{!! Form::close() !!}--}}

@endsection