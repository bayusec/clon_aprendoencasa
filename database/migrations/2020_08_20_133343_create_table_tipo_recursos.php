<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTipoRecursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_recursos', function (Blueprint $table) {
//            $table->id();
            $table->unsignedBigInteger('recurso_id');
            $table->string('descripcion');
            $table->string('imagen');
//            $table->timestamps();

            $table->foreign('recurso_id')
                ->references('id')
                ->on('recursos')
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
        Schema::dropIfExists('tipo_recursos');
    }
}
