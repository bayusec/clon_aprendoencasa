<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReCreateTableGradosMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('grados_materias');
        Schema::create('grados_materias', function (Blueprint $table) {
            $table->unsignedBigInteger("plan_id");
            $table->unsignedBigInteger("grado_id");
            $table->unsignedBigInteger("materia_id")->nullable();
            $table->timestamps();

            $table->index(['plan_id','grado_id','materia_id']);

            $table->foreign('plan_id')
                ->references('id')
                ->on('planes_educativos')
                ->onDelete('cascade');

            $table->foreign("grado_id")
                ->references("id")
                ->on("grados")
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
        Schema::dropIfExists('grados_materias');
    }
}
