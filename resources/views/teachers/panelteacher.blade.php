@extends('teachers.teacherlayout')

@section('page-header')
    {{ env('app_name') }} <small>{{ old('scheluded_date', date('l, H:i d-M-Y')) }}</small>
@stop

@section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-success">
          <div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
            <center>
              <i class="fa fa-edit"></i>
              <h4 class="box-title">Hola {{ Auth::user()->name }} {{ env('app_name') }} Te da la bienvenida</h4>
            </center>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-xs-4">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">

                    <h4>Profesores</h4>
                  </div>
                  <div class="icon">
                    <i class="glyphicon glyphicon-asterisk"></i>
                  </div>
                <a href="{{url('/admin/kajian')}}" class="small-box-footer">Ver... <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
            </div>
        </div>
    <!-- ./col -->

    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">

        <h4>Estudiantes</h4>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-home"></i>
        </div>
        <a href="{{url('/admin/direktori')}}" class="small-box-footer">Ver... <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">


        <h4>Gestionar</h4>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-certificate"></i>
        </div>
        <a href="{{url('/admin/quotes')}}" class="small-box-footer">Detalles <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">

        <h4>Calificaciones</h4>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-tags"></i>
        </div>
        <a href="{{url('/admin/event')}}" class="small-box-footer">Ver... <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">

        <h4>Usuarios</h4>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-usd"></i>
        </div>
        <a href="{{url('/admin/zis')}}" class="small-box-footer">Ver... <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>


    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">

        <h4>Finanzas</h4>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-briefcase"></i>
        </div>
        <a href="{{url('/admin/coworking')}}" class="small-box-footer">Ver... <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
@stop
