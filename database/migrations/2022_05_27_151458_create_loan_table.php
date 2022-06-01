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
        Schema::create('loan', function (Blueprint $table) {
            $table->id('cod');
            $table->date('Dloan');
            $table->date('Dreturn');
            $table->unsignedBigInteger('book_');
            $table->unsignedBigInteger('user_');
            $table->unsignedBigInteger('librarian_');
            $table->foreign('book_')->references('id')->on('book');
            $table->foreign('user_')->references('id')->on('user');
            $table->foreign('librarian_')->references('id')->on('librarian');
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
        Schema::dropIfExists('loan');
    }
};
