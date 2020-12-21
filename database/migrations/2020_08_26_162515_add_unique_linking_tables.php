<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueLinkingTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grados_materias',function (Blueprint $table){
            $table->index(['grado_id','materia_id']);
        });

        Schema::table('grados_planes',function (Blueprint $table){
            $table->index(['plan_id','grado_id']);
        });

        Schema::table('multimedia_plan',function (Blueprint $table){
            $table->index(['plan_id','multimedia_id']);
        });

        Schema::table('recursos_links',function (Blueprint $table){
            $table->index(['semana_id','recurso_id']);
        });

        Schema::table('semanas',function (Blueprint $table){
            $table->index(['plan_id','grado_id','materia_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grados_materias',function (Blueprint $table){
            $table->dropIndex(['grado_id','materia_id']);
        });

        Schema::table('grados_planes',function (Blueprint $table){
            $table->dropIndex(['plan_id','grado_id']);
        });

        Schema::table('multimedia_plan',function (Blueprint $table){
            $table->dropIndex(['plan_id','multimedia_id']);
        });

        Schema::table('recursos_links',function (Blueprint $table){
            $table->dropIndex(['semana_id','recurso_id']);
        });

        Schema::table('semanas',function (Blueprint $table){
            $table->dropIndex(['plan_id','grado_id','materia_id']);
        });
    }
}
