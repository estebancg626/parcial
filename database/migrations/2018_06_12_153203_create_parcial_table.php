<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcial', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_empleado');
            $table->string('apellido_empleado');
            $table->string('identificacion');
            $table->string('nombre_usuario');
            $table->string('contraseña_usuario');
            $table->string('correo_empleado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcial');
    }
}
