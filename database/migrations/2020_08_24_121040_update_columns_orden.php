<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsOrden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materias', function (Blueprint $table){
            $table->dropColumn('orden');
        });

        Schema::table('recursos', function (Blueprint $table){
            $table->dropColumn('orden');
        });

        #ADD orden a recursos_links que es el que deberia guardar el orde asociado a plan->grado->materia
        Schema::table('recursos_links', function (Blueprint $table){
            $table->tinyInteger('orden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materias', function (Blueprint $table) {
            $table->tinyInteger('orden')->nullable();
        });

        Schema::table('recursos', function (Blueprint $table) {
            $table->tinyInteger('orden')->nullable();
        });

        Schema::table('recursos_links', function (Blueprint $table){
            $table->dropColumn('orden');
        });
    }
}
