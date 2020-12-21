<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGradosMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grados_materias', function (Blueprint $table) {
            $table->unsignedBigInteger("grado_id");
            $table->unsignedBigInteger("materia_id");
            $table->timestamps();

//            $table->foreignId('grado_id')->constrained('grados');
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
