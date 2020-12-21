<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecursoslinksAddSeccionid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('recursos_links', function (Blueprint $table){
            if(!Schema::hasColumn('recursos_links','seccion_id')) {
                $table->unsignedBigInteger('seccion_id')->after('semana_id'); //unique fk
                $table->foreign('seccion_id')
                    ->references('id')
                    ->on('secciones')
                    ->onDelete('cascade');
            }
            $table->unique(['semana_id','seccion_id','recurso_id']);
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
        Schema::table('recursos_links', function (Blueprint $table){
//            $table->dropColumn('seccion_id');
            $table->dropUnique(['semana_id','seccion_id']);

        });

    }
}
