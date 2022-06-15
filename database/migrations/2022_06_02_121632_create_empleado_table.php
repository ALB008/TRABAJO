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
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->integer('doc_emp');
            $table->string('nom_emp', 40);
            $table->string('apell_emp', 70);
            $table->date('nacim_emp');
            $table->string('tel_emp', 13);
            $table->string('email_emp', 50);
            $table->string('gen_emp', 1);
            $table->string('estud_emp', 50);
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
        Schema::dropIfExists('empleado');
    }
};
