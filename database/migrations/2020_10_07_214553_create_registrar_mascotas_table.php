<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrarMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar_mascotas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_entrada');
            $table->string('nombres');
            $table->string('direccion');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('correo');
            $table->string('nombre_especie');
            $table->string('raza');
            $table->string('genero');
            $table->string('color');
            $table->string('talla');
            $table->string('peso');
            $table->string('edad');
            $table->string('señales_particulares');
            $table->string('estado_ingreso');
            $table->string('condicion_general');
            $table->string('actitud_general');
            $table->string('motivo_ingreso_anamnesis');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrar_mascotas');
    }
}
