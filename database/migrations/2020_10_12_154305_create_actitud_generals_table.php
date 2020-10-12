<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActitudGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actitud_generals', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nombre');
=======
>>>>>>> 6e448d118c64fef02186af20882c328975d1edbf
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
        Schema::dropIfExists('actitud_generals');
    }
}
