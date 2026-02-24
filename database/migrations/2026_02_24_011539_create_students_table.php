<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Studenta;
use App\Models\Student;
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
    $table->string('name'); // Check karein yahan 'student_name' to nahi likha?
    $table->string('email')->unique();
    $table->integer('age');
    $table->string('gender');
    $table->string('address');
    $table->string('phone');
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
        Schema::dropIfExists('students');
    }
};
