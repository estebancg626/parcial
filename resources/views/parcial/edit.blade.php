@extends('layouts.layout')
@section('content')
<div class="row">
<section class="content">
<div class="col-md-8 col-md-offset-2">
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Error!</strong> Revise los campos obligatorios.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-info">
{{Session::get('success')}}
</div>
@endif
<div class="panel panel-default" align="center" style="opacity: 0.8;">
<div class="panel-heading">

<h3 class="panel-title">Editar Informarcion</h3>
</div>
<div class="panel-body">
<div class="table-container">
<form method="POST" action="{{ route('parcial.update',$parcial->id) }}" role="form">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<input type="text" name="nombre_empleado" id="nombre_empleado" class="form-control input-sm" value="{{$parcial->nombre_empleado}}">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<input type="text" name="identificacion" id="identificacion" class="form-control input-sm" value="{{$parcial->identificacion}}">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<input type ="text" name="apellido_empleado" class="form-control input-sm" placeholder="apellido_empleado" value = "{{$parcial->apellido_empleado}}">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control input-sm" value="{{$parcial->nombre_usuario}}">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<input type="text" name="contraseña_usuario" id="contraseña_usuario" class="form-control input-sm" value="{{$parcial->contraseña_usuario}}">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<input type="text" name="correo_empleado" class="form-control input-sm" placeholder="correo_empleado" value = "{{$parcial->correo_empleado}}">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<input type="submit" value="Modificar Informarcion" class="btn btn-success btn-block">
<a href="{{ route('parcial.index') }}" class="btn btn-info btn-block" >Volver Atrás</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
@endsection


