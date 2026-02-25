<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // ===============================
    // Teacher Dashboard
    // ===============================

    public function dashboardteacher()
    {
        return view('admin.teacher.teacherdashboard');
    }

    // ===============================
    // Teacher Creates Course
    // ===============================

    public function teacherUserStore(Request $request)
    {
        $validatedData = $request->validate([
            'name'        => ['required', 'string'],
            'description' => ['required', 'string'],
            'price'       => ['required', 'numeric'],
            'duration'    => ['required', 'string'],
            'category'    => ['required', 'string'],
            'level'       => ['required', 'string'],
        ]);

        // Generate slug
        $validatedData['slug'] = Str::slug($request->name) . '-' . time();

        Course::create($validatedData);

        return redirect()->route('teacher.dashboard')
            ->with('success', 'Course created successfully!');
    }

    // ===============================
    // Student Dashboard
    // ===============================

    public function dashboardstudent()
    {
        return view('admin.student.studentdashboard');
    }
}