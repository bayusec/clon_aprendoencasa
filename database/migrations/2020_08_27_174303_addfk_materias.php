<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddfkMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('grados_materias_planes', function (Blueprint $table){
            $table->foreign('materia_id')
                ->references('id')
                ->on('materias')
                ->onDelete('cascade');
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
        Schema::table('grados_materias_planes', function (Blueprint $table){
            $table->dropForeign('materia_id');
        });

    }
}
