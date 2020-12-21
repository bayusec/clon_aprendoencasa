<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropGradosPlanes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('grados_planes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('grados_planes', function (Blueprint $table) {
            $table->unsignedBigInteger("plan_id");
            $table->unsignedBigInteger("grado_id");
            $table->integer('orden');
            $table->timestamps();


            $table->foreign("plan_id")
                ->references("id")
                ->on("planes_educativos")
                ->onDelete("cascade");


        });
    }
}
