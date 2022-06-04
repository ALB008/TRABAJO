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
        Schema::create('libro', function (Blueprint $table) {
            $table->integer('isbn_lib')->primary();
            $table->string('cod_lib', 10);
            $table->string('nom_lib', 50);
            $table->string('estado_lib', 1);
            $table->year('anno_lib');
            $table->integer('pag_lib');
            $table->unsignedbigInteger('cod_edit_lib');
            $table->foreign('cod_edit_lib')->references('cod_edit')->on('editorial');
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
        Schema::dropIfExists('libro');
    }
};
