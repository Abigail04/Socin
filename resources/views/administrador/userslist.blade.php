@extends('plantilla')

@section('central')

<div class="panel panel-primary">

  <div class="panel-heading">Lista de Usuarios</div>
  <div class="panel-body">
      @if (Session::has('message'))
             <p class="alert alert-success">{{ Session::get('message')}}</p>
      @endif
  </div>

<p>Existen {{ $usuario->total() }} usuarios registrados</p>

  <div class="table-responsive" align="left">
	  	<table class="table table-striped  table-hover">
	    	<tr class="primary">
	    		<th>Id</th>
	    		<th>Nombre</th>
	    		<th>Email</th>
                <th>Tipo de usuario</th>
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