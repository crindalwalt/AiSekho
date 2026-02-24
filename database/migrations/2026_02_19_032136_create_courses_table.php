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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            // basic information about the course
            $table->string("name");
            $table->string("excerpt");
            $table->string("description");
            $table->string("slug")->unique();
            $table->string("thumbnail");
            $table->string("category");
            $table->integer("duration")->nullable();
            $table->string("video_url")->nullable();
            $table->enum("level" , ["beginner", "intermediate", "advanced"]);



            // course details
            $table->integer("read_time")->nullable();
            $table->integer("lessons_count")->nullable();


            // course price
            $table->decimal("price", 8, 2)->default(0);
            $table->decimal("discount_price", 8, 2)->nullable();


            // course status
            $table->enum("status", ["draft", "published", "inactive"])->default("draft");


            $table->string("teacher_id");
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
