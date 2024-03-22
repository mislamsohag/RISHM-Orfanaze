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
        Schema::create('classe_routines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('day_id');
            $table->enum('session',['1st_hr','2nd_hr','3rd_hr','4th_hr','5th_hr','6th_hr', '7th_hr', '8th_hr']);
            $table->enum('time',['10:00-11:00','11:00-12:00','12:00-01:00','01:00-01:45','01:45-02:35','02:35-03:25', '03:25-04:15', '04:15-05:00']);
            //F-keys
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('semister_id')->nullable();
            $table->unsignedBigInteger('subject_id');
            //F-links
            $table->foreign('day_id')->references('id')->on('days')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('classe_id')->references('id')->on('classes')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('group_id')->references('id')->on('groups')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('semister_id')->references('id')->on('semisters')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('subject_id')->references('id')->on('subjects')->cascadeOnUpdate()->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classe_routines');
    }
};
