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
        Schema::create('semisters', function (Blueprint $table) {
            $table->id();
            $table->string('semisterName');
            $table->string('semisterFee');
            $table->unsignedBigInteger('classe_id');
            //linkup
            $table->foreign('classe_id')->references('id')->on('classes')->cascadeOnUpdate()->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semisters');
    }
};
