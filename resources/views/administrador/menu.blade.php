@extends('plantilla')

@section('central')

    {!! Form::open(['route'=>'administrador.store', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
<!-- PRIMER PANEL -->
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-info">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	     	 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	     	 PROBANDO PROBANDO Usuarios
	     	 </a>
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
			
			<div class="form-group">
				<div class="col-xs-12 col-sm-6">
				<a class="btn btn-info btn-default" href="{{ route('administrador.create') }}" role="button">Nuevo usuario</a>
				</div>
				<div class="col-xs-12 col-sm-6">
				<a class="btn btn-info btn-default"  href="{{ route('users.index') }}" role="button">Lista de usuarios</a>
				</div>
			</div>

              <div class="form-group">
                  <div class="col-xs-12 col-sm-6">
                      <a class="btn btn-info btn-default" href="{{ route('administrador.edit') }}" role="button">Editar usuario</a>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                      <a class="btn btn-info btn-default" href="{{ route('productos.index') }}" role="button">Reporte</a>
                  </div>
              </div>

		  </div>
		</div>
	  </div>
<!-- SEGUNDO PANEL -->
	  <div class="panel panel-info">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	          Inventario
	        </a>
	      </h4>
	    </div>
	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
			<div class="form-group">
				<div class="col-xs-12 col-sm-6">
				<a class="btn btn-primary btn-default" href="{{ route('gerente.create') }}" role="button">Agregar Producto</a>
				</div>
				<div class="col-xs-12 col-sm-6">
				<a class="btn btn-primary btn-default" href="{{ route('productos.index') }}" role="button">Lista de productos</a>
				</div>
     		</div>
    	  </div>
  		</div>
  	  </div>
  	</div>
    {!! Form::close() !!}

@endsection