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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subjectName');
            $table->string('subjectCode')->nullable();
            //F-keys
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('group_id')->nullable();
            //F-Links
            $table->foreign('class_id')->references('id')->on('clases')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('group_id')->references('id')->on('groups')->cascadeOnUpdate()->restrictOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
