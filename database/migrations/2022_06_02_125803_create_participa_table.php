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
        Schema::create('participa', function (Blueprint $table) {
            $table->id('cod_part');
            $table->Integer('id_usu_part');
            $table->unsignedBigInteger('cod_activ_part');
            $table->foreign('id_usu_part')->references('id_usu')->on('usuario');
            $table->foreign('cod_activ_part')->references('cod_activ')->on('actividad');
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
        Schema::dropIfExists('participa');
    }
};
