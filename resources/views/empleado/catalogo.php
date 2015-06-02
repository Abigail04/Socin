@extends('plantilla')

@section('central')

<div class="panel panel-primary">

  <div class="panel-heading">Lista de productos</div>
  <div class="panel-body">
    <p>no se paea que es esto
    </p>
  </div>

<p>Existe {{ $producto->total() }} productos registrados</p>

  <div class="table-responsive" align="left">
	  	<table class="table table-striped  table-hover">
	    	<tr class="primary">
	    		<th>Id del producto</th>
	    		<th>Descripción</th>
	    		<th>Unidad</th>
                <th>Precio de venta</th>
                <th>Cantidad</th>
	    	</tr>
	    	@foreach ($producto as $pro)
	    	<tr>
	    		<td>{{ $pro->idproduct }}</td>
	    		<td>{{ $pro->descripcion }}</td>
                <td>{{ $pro->unidad }}</td>
                <td>{{ $pro->precioc }}</td>
                <td>{{ $pro->cantidad }}</td>
	    	</tr>
	    	@endforeach
	    </table>
	    {!! $producto->render() !!}
  </div>

@stop