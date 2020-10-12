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
            $table->string('tipo_entrada');
            $table->string('nombres');
            $table->string('direccion');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('correo');

            $table->unsignedBigInteger('especie_id');
            $table->foreign('especie_id')->references('id')->on('especies');
            // $table->unsignedBigInteger('raza_id');
            // $table->foreign('raza_id')->references('id')->on('razas');
            // $table->dropForeign('regitrar_mascota_raza_id_foreign');
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
        Schema::dropIfExists('registrar_mascotas');
        
    }
}
