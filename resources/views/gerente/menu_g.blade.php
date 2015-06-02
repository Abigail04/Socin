@extends('plantilla')

@section('central')

    {!! Form::open(['route'=>'gerente.store', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
    <!-- PRIMER PANEL -->
	  <div class="panel panel-info">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	          Inventario
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
			<div class="form-group">
				<div class="col-xs-12 col-sm-6">
				<a class="btn btn-primary btn-default" href="{{ route('gerente.create') }}" role="button">Agregar Producto</a>
				</div>
				<div class="col-xs-12 col-sm-6">
				<a class="btn btn-primary btn-default" href="{{ route('productos.index') }}" role="button">Lista de Productos</a>
				</div>
     		</div>
    	  </div>
  		</div>
  	  </div>
    {!! Form::close() !!}

@endsection