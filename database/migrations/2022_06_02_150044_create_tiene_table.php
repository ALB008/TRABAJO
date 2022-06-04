<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiene', function (Blueprint $table) {
            $table->id('idT');
            $table->integer('isbn_libT');
            $table->unsignedBigInteger('cod_genT');
            $table->foreign('isbn_libT')->references('isbn_lib')->on('libro');
            $table->foreign('cod_genT')->references('cod_gen')->on('genero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiene');
    }
};
