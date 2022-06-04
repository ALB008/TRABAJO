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
        Schema::create('prestamo', function (Blueprint $table) {
            $table->id('id_pres');
            $table->integer('id_usu_pres');
            $table->integer('isbn_lib_pres');
            $table->date('Fpres_pres');
            $table->date('Fdev_pres');
            $table->string('estado_pres', 1);
            $table->foreign('id_usu_pres')->references('id_usu')->on('usuario');
            $table->foreign('isbn_lib_pres')->references('isbn_lib')->on('libro');
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
        Schema::dropIfExists('prestamo');
    }
};
