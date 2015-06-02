@extends('plantilla')

@section('central')

    <!-- PRIMER PANEL -->
    <div class="panel panel-info">
        {!! Form::model($user, ['route'=>['users.update', $user], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                Eliminar usuario: Id:  {{ $user->id }}
            </h4>
        </div>
        <div class="panel-body">


            <div class="form-group">
                {!! Form::label('name', 'Nombre:',
                ['class'=>'col-xs-12 col-sm-5 control-label']) !!}
                <div class="col-xs-12 col-sm-4">
                    {!! Form::text('name', null,
                    array('class'=>'form-control',
                    'disabled'))
                    !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('appaterno', 'Apellido Paterno:',
                ['class'=>'col-xs-12 col-sm-5 control-label']) !!}
                <div class="col-xs-12 col-sm-4">
                    {!! Form::text('appaterno', null,
                    array('class'=>'form-control',
                    'disabled'))
                    !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('apmaterno', 'Apellido Materno:',
                ['class'=>'col-xs-12 col-sm-5 control-label']) !!}
                <div class="col-xs-12 col-sm-4">
                    {!! Form::text('apmaterno', null,
                    array('class'=>'form-control',
                    'disabled'))
                    !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('celular', 'Celular:',
                ['class'=>'col-xs-12 col-sm-5 control-label']) !!}
                <div class="col-xs-12 col-sm-4">
                    {!! Form::text('celular', null,
                    array('class'=>'form-control',
                    'disabled'))
                    !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Correo Eléctronico:',
                ['class'=>'col-xs-12 col-sm-5 control-label']) !!}
                <div class="col-xs-12 col-sm-4">
                    {!! Form::email('email', null,
                    array('class'=>'form-control',
                    'disabled'))
                    !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}

        {!! Form::open(['route'=>['users.destroy', $user], 'method'=>'DELETE', 'class'=>'form-horizontal']) !!}
        <button class="btn btn-danger" type="submit" name="Eliminar" id="Eliminar" value="Enviar">Eliminar usuario</button>
        <a class="btn btn-default" href="{{ route('users.index') }}" role="button">Cancelar</a>
        {!! Form::close() !!}
        <br>
    </div>

@endsection