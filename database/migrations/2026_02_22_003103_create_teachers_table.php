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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->integer('phone_number')->nullable();
                $table->string('password');
                $table->enum('gender', ['male', 'female', 'other'])->nullable();

            $table->string('slug')->unique();

            $table->string('title')->nullable(); // Senior AI Research Scientist
            $table->text('bio')->nullable();

            $table->string('image')->nullable();

            // Social links
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();

            // Stats
            $table->integer('students_count')->default(0);
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('reviews_count')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
