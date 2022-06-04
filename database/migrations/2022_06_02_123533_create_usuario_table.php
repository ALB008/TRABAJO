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
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id_usu')->primary();
            $table->string('nom_usu', 40);
            $table->string('apell_usu', 70);
            $table->date('nacim_usu');
            $table->string('tel_usu', 13);
            $table->string('email_usu', 50);
            $table->string('gen_usu', 1);
            $table->integer('id_emp_usu');
            $table->foreign('id_emp_usu')->references('id_emp')->on('empleado');
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
        Schema::dropIfExists('usuario');
    }
};
