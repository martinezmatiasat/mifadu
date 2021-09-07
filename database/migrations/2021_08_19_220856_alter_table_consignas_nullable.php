<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableConsignasNullable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table('consignas', function (Blueprint $table) {
         $table->string('descripcion')->nullable()->change();
         $table->string('archivo_consigna')->nullable()->change();
         $table->smallInteger('pdf')->default(0)->change();
         $table->smallInteger('img')->default(0)->change();
         $table->smallInteger('link')->default(0)->change();
         $table->smallInteger('grupal')->default(0)->change();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      //
   }
}
