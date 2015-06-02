@extends('plantilla')

@section('central')

	{{--{!! Form::model($producto, ['route'=>['gerente.update', $producto], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}--}}
	  <div class="panel panel-info">
          {!! Form::model($producto, ['route'=>['gerente.update', $producto], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	      Datos del Producto
	      </h4>
	    </div>
		 <div class="panel-body">
		 	<br>
			<div class="form-group">
				
				{!! Form::label('idproduct', 'Id del Producto: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::text('idproduct', null,
								  array('class'=>'form-control',
                                  'disabled'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('descripcion', 'Descripción: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('descripcion', null,
								  array('class'=>'form-control',
                                  'disabled'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('unidad', 'Unidad: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::text('unidad', null,
								  array('class'=>'form-control',
                                  'disabled'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('precioc', 'Precio de compra: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('precioc', null,
								  array('class'=>'form-control',
                                  'disabled'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('preciov', 'Precio de venta: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('preciov', null,
								  array('class'=>'form-control',
                                  'disabled'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('cantidad', 'Cantidad: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('cantidad', null,
								  array('class'=>'form-control',
                                  'disabled'))
					!!}
				</div>
			</div>
		 </div>
          {!! Form::close() !!}

          {!! Form::open(['route'=>['productos.destroy', $producto], 'method'=>'DELETE', 'class'=>'form-horizontal']) !!}
          <button class="btn btn-danger" type="submit" name="Eliminar" id="Eliminar" value="Enviar">Eliminar usuario</button>
          <a class="btn btn-default" href="{{ route('productos.index') }}" role="button">Cancelar</a>
          {!! Form::close() !!}
          <br>
		</div>
		{{--{!! Form::close() !!}--}}

@endsection