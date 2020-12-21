<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRecursosLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('semana_id');
            $table->unsignedBigInteger('recurso_id');
            $table->string('link');
            $table->timestamps();

            $table->foreign('semana_id')
                ->references('id')
                ->on('semanas')
                ->onDelete('cascade');

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
        Schema::dropIfExists('recursos_links');
    }
}
