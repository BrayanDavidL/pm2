<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('note');
            $table->unsignedBigInteger('apprentice_id');
            $table->unsignedBigInteger('actity_id');
            $table->timestamps();
            $table->foreign('apprentice_id')->references('id')->on('apprentices');
            $table->foreign('actity_id')->references('id')->on('activities');            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
