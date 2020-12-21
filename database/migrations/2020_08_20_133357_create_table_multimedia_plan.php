<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMultimediaPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('multimedia_id');
            $table->string('descripcion');
            $table->string('link');

            $table->foreign('plan_id')
                ->references('id')
                ->on('planes_educativos')
                ->onDelete('cascade');

            $table->foreign('multimedia_id')
                ->references('id')
                ->on('multimedia')
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
        Schema::dropIfExists('multimedia_plan');
    }
}
