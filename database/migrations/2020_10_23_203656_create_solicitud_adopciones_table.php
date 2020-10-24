<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudAdopcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_adopciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cedula');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->string('documentos');
            $table->unsignedBigInteger('adopcion_id');
            $table->foreign('adopcion_id')->references('codigo_animal')->on('registrar_mascotas')->onDelete('cascade');
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
        Schema::dropIfExists('solicitud_adopciones');
    }
}
