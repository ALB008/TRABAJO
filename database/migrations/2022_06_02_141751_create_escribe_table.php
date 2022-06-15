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
        Schema::create('escribe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('isbn_lib_esc');
            $table->unsignedBigInteger('cod_aut_esc');
            $table->foreign('isbn_lib_esc')->references('id')->on('libro');
            $table->foreign('cod_aut_esc')->references('id')->on('autor');
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
        Schema::dropIfExists('escribe');
    }
};
