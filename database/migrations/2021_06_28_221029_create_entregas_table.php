<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->integer('consigna_id');
            $table->tinyInteger('privado');
            $table->string('arch_portada')->nullable();
            $table->integer('docente_eval_id')->nullable();
            $table->integer('nota')->nullable();
            $table->tinyInteger('promediar')->nullable();
            $table->text('reflexion_eval')->nullable();
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
        Schema::dropIfExists('entregas');
    }
}
