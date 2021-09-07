<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('nombre');
            $table->string('descripcion_corta');
            $table->string('descripcion');
            $table->string('archivo_consigna');
            $table->integer('dias_duracion');
            $table->tinyInteger('pdf');
            $table->tinyInteger('img');
            $table->tinyInteger('link');
            $table->tinyInteger('grupal');
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
        Schema::dropIfExists('consignas');
    }
}
