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
            $table->id();
            $table->string('isbn_lib', 13);
            $table->string('cod_lib', 10);
            $table->string('nom_lib', 50);
            $table->string('estado_lib', 1);
            $table->string('anno_lib', 4);
            $table->integer('pag_lib');
            $table->unsignedbigInteger('cod_edit_lib');
            $table->foreign('cod_edit_lib')->references('id')->on('editorial');
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
