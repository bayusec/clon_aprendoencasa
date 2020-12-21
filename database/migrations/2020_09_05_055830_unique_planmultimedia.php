<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UniquePlanmultimedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('multimedia_plan', function (Blueprint $table){
            $table->unique(['plan_id','multimedia_id']);
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
        Schema::table('multimedia_plan', function (Blueprint $table){
            $table->dropUnique(['plan_id','multimedia_id']);
        });
    }
}
