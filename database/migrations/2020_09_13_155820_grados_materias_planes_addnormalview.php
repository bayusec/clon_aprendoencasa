<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GradosMateriasPlanesAddnormalview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grados_materias_planes', function (Blueprint $table){
            $table->tinyInteger('vista_normal')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grados_materias_planes', function (Blueprint $table){
            $table->dropColumn('vista_normal');
        });
    }
}
