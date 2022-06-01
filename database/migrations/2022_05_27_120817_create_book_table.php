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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->string('cod');
            $table->string('title');
            $table->string('status');
            $table->year('year');
            $table->integer('page');
            $table->unsignedBigInteger('editorial_');
            $table->unsignedBigInteger('librarian_');
            $table->foreign('editorial_')->references('cod')->on('editorial');
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
        Schema::dropIfExists('book');
    }
};
