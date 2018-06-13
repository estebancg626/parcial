<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parcial extends Model
{
    protected $fillable = ['nombre_empleado', 'apellido_empleado', 'identificacion','nombre_usuario','contraseña_usuario','correo_empleado'];
}
