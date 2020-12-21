<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSemanas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semanas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('grado_id');
            $table->unsignedBigInteger('materia_id')->nullable(); //null
            $table->string('descripcion');
            $table->tinyInteger('orden');
            $table->timestamps();
            $table->timestamp('fecha_semana')->nullable();

            $table->foreign("plan_id")
                ->references("id")
                ->on("planes_educativos")
                ->onDelete("cascade");

            $table->foreign("grado_id")
                ->references("id")
                ->on("grados")
                ->onDelete("cascade");

            $table->foreign("materia_id")
                ->references("id")
                ->on("materias")
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
        Schema::dropIfExists('semanas');
    }
}
