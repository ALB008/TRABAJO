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
        Schema::create('by', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('writer_');
            $table->unsignedBigInteger('book_');
            $table->foreign('writer_')->references('cod')->on(('writer'));
            $table->foreign('book_')->references('id')->on(('book'));
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
        Schema::dropIfExists('by');
    }
};
