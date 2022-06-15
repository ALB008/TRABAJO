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
            $table->id();
            $table->string('nom_sistem', 15);
            $table->string('contra_sistem', 10);
            $table->integer('tipo_sistem');
            $table->unsignedBigInteger('id_emp_sistem');
            $table->foreign('id_emp_sistem')->references('id')->on('empleado');
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
