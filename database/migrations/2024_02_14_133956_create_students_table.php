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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name_bangla',100);
            $table->string('name_english', 100);
            $table->string('email', 100)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('dathOfBirth', 20);
            $table->enum('gender',['male','female', 'common']);
            $table->string('height', 10)->nullable();
            $table->string('img', 200);
            $table->string('bloodGroup', 100)->nullable();
            $table->string('vill', 100);
            $table->string('P.O', 100);
            $table->string('P.S', 100);
            $table->string('city', 100);
            $table->string('country', 100);
            $table->string('religion', 50);
            $table->string('present_address')->nullable();
            $table->string('n_id', 20)->unique();
            //F-keys
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('semisters_id')->nullable();
            //F-Links
            $table->foreign('classe_id')->references('id')->on('classes')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('group_id')->references('id')->on('groups')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('semister_id')->references('id')->on('semisters')->cascadeOnUpdate()->restrictOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
