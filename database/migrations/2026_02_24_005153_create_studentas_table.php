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
        Schema::create('studentas', function (Blueprint $table) {
     $table->id();
    $table->string('name'); // <--- Ensure it is 'name', NOT 'student_name'
    $table->integer('age');
    $table->string('gender');
    $table->string('address');
    $table->string('phone');
    $table->string('email')->unique();
    $table->foreignId('course_id')->constrained();
    $table->string('image_url')->nullable();
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentas');
    }
};
