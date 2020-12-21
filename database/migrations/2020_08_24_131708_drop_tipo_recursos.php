<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTipoRecursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('tipo_recursos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('tipo_recursos', function (Blueprint $table) {
            $table->unsignedBigInteger('recurso_id');
            $table->string('descripcion');
            $table->string('imagen');

            $table->foreign('recurso_id')
                ->references('id')
                ->on('recursos')
                ->onDelete('cascade');
        });
    }
}
