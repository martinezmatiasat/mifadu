<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableConsignasChangeDiasDuracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consignas', function (Blueprint $table) {
            $table->renameColumn('dias_duracion', 'fecha_entrega');
            //$table->date('fecha_entrega')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consignas', function (Blueprint $table) {
            //
        });
    }
}
