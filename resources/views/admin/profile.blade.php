@extends('admin.adminlayout')

@section('page-header')
<small>actualizar</small> Mi Cuenta 
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
        {!! Form::model($item, [
                'action' => ['ProfileController@update', $item->id],
                'method' => 'put',
                'files' => true
            ])
        !!}

        <div class="box-body" style="margin:10px;">
            {!! Form::myInput('text', 'name', 'Nombres') !!}
            {!! Form::myInput('text', 'last_name', 'Apellidos') !!}
            {!! Form::myInput('text', 'DNI', 'Documento Personal') !!}
            {!! Form::myInput('date', 'birthday, Fecha de Nac.') !!}
            {!! Form::myInput('email', 'email', 'Email') !!}
            {!! Form::myInput('password', 'password', 'Contraseña') !!}
            {!! Form::myInput('password', 'password_confirmation', 'Repetir contraseña') !!}
            {!! Form::myFileImage('avatar', 'Avatar', $item->avatar) !!}
        </div>

        <div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
      	  <button type="submit" class="btn btn-info" style="width:100px;">{{ trans('Actualizar') }}</button>
      	</div>

      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
