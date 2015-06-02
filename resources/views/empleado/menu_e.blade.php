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
				<div class="col-xs-12">
				<a class="btn btn-primary btn-default" href="{{ route('productos.index') }}" role="button">Catálogo de Producto</a>
				</div>
     		</div>
    	  </div>
  		</div>
  	  </div>
    {!! Form::close() !!}

@endsection