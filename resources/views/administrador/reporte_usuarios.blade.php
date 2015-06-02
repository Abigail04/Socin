@extends('plantilla')

@section('central')

<div class="panel panel-primary">

  <div class="panel-heading">Lista de Usuarios modificados</div>

<p>Existen {{ $usuario->total() }} usuarios modificados</p>

  <div class="table-responsive" align="left">
	  	<table class="table table-striped  table-hover">
	    	<tr class="primary">
	    		<th>Id</th>
	    		<th>Nombre</th>
	    		<th>Fecha/Hora</th>
                <th>¿Quien lo modifico?</th>
                <th>Estado</th>
	    		<th>Acciones</th>
	    	</tr>
	    	@foreach ($usuario as $user)
	    	<tr>
	    		<td>{{ $user->id }}</td>
	    		<td>{{ $user->name }}{{' '}}{{$user->appaterno }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->tipo }}</td>
	    		<td>{{ $user->estado }}</td>
	    		<td>
	    			<a href="{{ route('administrador.edit', $user) }}">Editar</a>
	    			<a href="{{ route('users.edit', $user) }}">Eliminar</a>
	    		</td>
	    	</tr>
	    	@endforeach
	    </table>
	    {!! $usuario->render() !!}
  </div>

@stop