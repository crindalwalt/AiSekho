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
           $request->validate([
            'name'        => ['required', 'string'],
            'description' => ['required', 'string'],
            'price'       => ['required', 'numeric'],
            'duration'    => ['required', 'string'],
            'category'    => ['required', 'string'],
            'level'       => ['required', 'string'],
            'thumbnail'   => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'read_time'   => ['required', 'integer'],
            'lessons_count' => ['required', 'integer'],
            'discount_price' => ['nullable', 'numeric'],
            'status'      => ['required', 'string'],
            'excerpt'      => ['required', 'string'],
        ]);

        // Generate slug
        $slug = Str::slug($request->name.'-');
        $status = $request->status === "Active" ? true : false;
      if ($request->hasFile('thumbnail')) {
        $img = $request->file('thumbnail');
        $imgName = "IMG-" . time() . "." . $img->getClientOriginalExtension();
        

         $img ->storeAs('thumbnails', $imgName, 'public');
      }
    Course::create([
            'name' => $request->name,
            "teacher_id"=>1,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'category' => $request->category,
            'level' => $request->level,
            'thumbnail' => "thumbnails/" . $imgName,
            'read_time' => $request->read_time,
            'lessons_count' => $request->lessons_count,
            'discount_price' => $request->discount_price,
            'status' => $request->status,
            'excerpt' => $request->excerpt,
            'slug' => $slug,
    ]);

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