<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddsubmateriaPlanSemana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
//        Schema::create('submaterias',function (Blueprint $table){
//            $table->id();
//            $table->string("descripcion");
//            $table->timestamps();
//        });

//        Schema::table('grados_materias_planes', function (Blueprint $table){
////            $table->id();
////            $table->unsignedBigInteger("submateria_id")->nullable();
//            $table->foreign("submateria_id")
//                ->references("id")
//                ->on("submaterias")
//                ->onDelete("cascade");
//        });

        Schema::table('semanas', function (Blueprint $table){
            $table->unsignedBigInteger('submateria_id')->nullable();
            $table->foreign("submateria_id")
                ->references("id")
                ->on("submaterias")
                ->onDelete("cascade");
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
//        Schema::dropIfExists('submaterias');

//        Schema::table('grados_materias_planes', function (Blueprint $table){
//            $table->dropColumn('submateria_id');
//        });
//
//        Schema::table('semanas', function (Blueprint $table){
//            $table->dropColumn('submateria_id');
//        });
    }
}
