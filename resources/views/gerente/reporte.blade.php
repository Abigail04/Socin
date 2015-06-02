@extends('plantilla')

@section('central')

<div class="panel panel-primary">

  <div class="panel-heading">Lista de productos modificados</div>

<p>Existen {{ $producto->total() }} productos modificados</p>

  <div class="table-responsive" align="left">
	  	<table class="table table-striped  table-hover">
	    	<tr class="primary">
	    		<th>Id</th>
	    		<th>Descripción</th>
	    		<th>Fecha/Hora</th>
                <th>¿Quien lo modifico?</th>
	    	</tr>
	    	@foreach ($producto as $pro)
	    	<tr>
	    		<td>{{ $pro->idproduct }}</td>
	    		<td>{{ $pro->descripcion }}</td>
                    <td>{{ $pro->updated_at }}</td>
                    {{--<td>{{ $pro->users->name }}.{{' '}}.{{ $pro->users->appaterno }}</td>--}}
	    	</tr>
	    	@endforeach
	    </table>
	    {!! $producto->render() !!}
  </div>

@stop