<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecursosAddcolumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('recursos', function (Blueprint $table){
            $table->string('tipo_contenido')->nullable();
            $table->longText('img')->nullable();
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
        Schema::table('recursos', function (Blueprint $table){
            $table->dropColumn('tipo_contenido');
            $table->dropColumn('img');
        });
    }
}
