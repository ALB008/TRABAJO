<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema', function (Blueprint $table) {
            $table->id('id_sistem');
            $table->string('nom_sistem', 15);
            $table->string('contra_sistem', 10);
            $table->integer('tipo_sistem');
            $table->integer('id_emp_sistem');
            $table->foreign('id_emp_sistem')->references('id_emp')->on('empleado');
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
        Schema::dropIfExists('sistema');
    }
};
