<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalesAdopcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales_adopcion', function (Blueprint $table) {
            $table->id();
            
            // $table->unsignedBigInteger('codigo_animal_registro');
            // $table->foreign('codigo_animal_registro')->references('codigo_animal')->on('regitrar_mascotas')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('animales_adopcion');
    }
}
