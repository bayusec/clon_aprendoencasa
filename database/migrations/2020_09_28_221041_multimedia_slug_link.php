<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MultimediaSlugLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('multimedia', function (Blueprint $table){
//            $table->renameColumn('descripcion','slug');
//            $table->longText('link');
        });

//        Schema::dropIfExists('recursos');

        Schema::table('recursos_links', function (Blueprint $table){
//            $table->dropForeign('recursos_links_recurso_id_foreign');
//            $table->dropColumn('recurso_id');
//            $table->longText('titulo');
//            $table->string('tipo_contenido');
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
        Schema::table('multimedia', function (Blueprint $table){
            $table->removeColumn('link');
        });
    }
}
