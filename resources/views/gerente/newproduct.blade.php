@extends('plantilla')

@section('central')

	{!! Form::open(['route'=>'gerente.store', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
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
								  'required',
								  'placeholder'=>'Id del producto',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('descripcion', 'Descripción: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('descripcion', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Descripción',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('unidad', 'Unidad: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
					{!! Form::text('unidad', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Unidad',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('precioc', 'Precio de compra: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('precioc', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Precio de compra',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('preciov', 'Precio de venta: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('preciov', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Precio de venta',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>
             {{--<div class="input-group">--}}
                 {{--<span class="input-group-addon">$</span>--}}
                 {{--<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">--}}
                 {{--<span class="input-group-addon">.00</span>--}}
             {{--</div>--}}

			<div class="form-group">
				{!! Form::label('cantidad', 'Cantidad agregar: ',
								['class'=>'col-xs-12 col-sm-5 control-label']) !!}
				<div class="col-xs-12 col-sm-4">
				{!! Form::text('cantidad', null,
								  array('class'=>'form-control',
								  'required',
								  'placeholder'=>'Cantidad',
								  'onchange'=>'this.value=this.value.toUpperCase();'))
					!!}
				</div>
			</div>

			<button class="btn btn-default" type="submit" name="Guardar" id="Guardar" value="Enviar">Guardar</button>
			<a class="btn btn-default" href="{{ route('gerente.index') }}" role="button">Cancelar</a>

		 </div>
			
		</div>
		{!! Form::close() !!}

@endsection