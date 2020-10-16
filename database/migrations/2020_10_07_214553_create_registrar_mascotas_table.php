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

            $table->string('fecha');
            $table->unsignedBigInteger('codigo_animal')->primary();
            $table->string('nombre_ciudadano');
            $table->string('direccion');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('correo');
            $table->string('nombre_ejemplar');
            $table->string('genero');
            $table->string('color');
            $table->string('talla');
            $table->string('peso');
            $table->string('edad');
            $table->string('estado');
            $table->string('señales_particulares');
            $table->string('motivo_ingreso_anamnesis');
            $table->timestamps();
            
            $table->unsignedBigInteger('especie_id');
            $table->foreign('especie_id')->references('id')->on('especies')->onDelete('cascade');
            
            $table->unsignedBigInteger('raza_id');
            $table->foreign('raza_id')->references('id')->on('razas')->onDelete('cascade');
            
            $table->unsignedBigInteger('tipo_entrada_id');
            $table->foreign('tipo_entrada_id')->references('id')->on('tipo_entradas')->onDelete('cascade');
            
            $table->unsignedBigInteger('condicion_id');
            $table->foreign('condicion_id')->references('id')->on('condicion_generals')->onDelete('cascade');

            $table->unsignedBigInteger('actitud_id');
            $table->foreign('actitud_id')->references('id')->on('actitud_generals')->onDelete('cascade');

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
