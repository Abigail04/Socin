@extends('plantilla')

@section('central')

<div class="panel panel-primary">

  <div class="panel-heading">Lista de productos</div>
  <div class="panel-body">
      {{--<a class="col-xs-12 " href="{{ route('gerente.index') }}">Inicio</a>--}}
      @if (Session::has('message'))
          <p class="alert alert-success">{{ Session::get('message')}}</p>
      @endif
      <nav class="navbar-form navbar-right " role="search">
          <a class="navbar-brand navbar-header" href="{{ route('gerente.index') }}">
              <img alt="Menu" src="{{ route('gerente.index') }}">
          </a>
          <a class="navbar-brand navbar-header" href="{{ route('gerente.create') }}">
              <img alt="Agregar Productos" src="{{ route('gerente.create') }}">
          </a>
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">

          <button type="submit" class="btn btn-default">Buscar</button>
      </nav>
      {{--</form>--}}
      {{--<nav class="navbar navbar-right navar-form" role="search">--}}
          {{--<div class="container-fluid form-group">--}}
              {{--<div class="navbar-header">--}}
                  {{----}}
                  {{--<a><input type="text" class="form-control" placeholder="Buscar">--}}
                  {{--<button type="submit" class="btn btn-default">Buscar</button></a>--}}
              {{--</div>--}}
          {{--</div>--}}
      {{--</nav>--}}

  </div>

<p>Existe {{ $producto->total() }} productos registrados</p>

  <div class="table-responsive" align="left">
	  	<table class="table table-striped  table-hover">
	    	<tr class="primary">
	    		<th>Id del producto</th>
	    		<th>Descripción</th>
	    		<th>Unidad</th>
                <th>Precio de compra</th>
                <th>Precio de venta</th>
                <th>Cantidad</th>
	    		<th>Acciones</th>
	    	</tr>
	    	@foreach ($producto as $pro)
	    	<tr>
	    		<td>{{ $pro->idproduct }}</td>
	    		<td>{{ $pro->descripcion }}</td>
                <td>{{ $pro->unidad }}</td>
                <td>{{ $pro->precioc }}</td>
	    		<td>{{ $pro->preciov }}</td>
                <td>{{ $pro->cantidad }}</td>
	    		<td>
	    			<a href="{{ route('gerente.edit', $pro) }}">Editar</a>
	    			<a href="{{ route('productos.edit', $pro) }}">Eliminar</a>
	    		</td>
	    	</tr>
	    	@endforeach

	       </table>

	    {!! $producto->render() !!}
  </div>

@stop