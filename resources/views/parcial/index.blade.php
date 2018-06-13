@extends('layouts.app')
@section('content')
<title>TRAMISOFT</title>
<div class="row">
<section class="content">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default" style = "opacity: 0.8;">
<div class="panel-body">
<div class="pull-left"><h3>Lista Empleados</h3></div>
<div class="pull-right">
<div class="btn-group">
<a href="{{ route('parcial.create') }}" class="btn btn-info" >Registrar Empleado</a>
</div>
</div>
<div class="table-container">
<table id="mytable" class="table table-bordred table-striped">
<thead>

<th>Nombres</th>
<th>Apellidos</th>
<th>Identificación</th>
<th>Username</th>
<th>Password</th>

<th>Email</th>
<th>Editar</th>
<th>Eliminar</th>
</thead>
<tbody>

@if($parcials->count())
@foreach($parcials as $parcial)
<tr>
<td>{{$parcial->nombre_empleado}}</td>
<td>{{$parcial->apellido_empleado}}</td>
<td>{{$parcial->identificacion}}</td>
<td>{{$parcial->nombre_usuario}}</td>
<td>{{$parcial->contraseña_usuario}}</td>
<td>{{$parcial->correo_empleado}}</td>

<td><a class="btn btn-primary btn-xs" href="{{action('ParcialController@edit', $parcial->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
<td>
<form action="{{action('ParcialController@destroy', $parcial->id)}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
</td>
</tr>
@endforeach
@else
<tr align="center">
<td colspan="8">No hay empleados registrados.!!!</td>
</tr>

@endif
</tbody>
</table>
</div>
</div>
{{ $parcials->links() }}
</div>
</div>
</section>
@endsection