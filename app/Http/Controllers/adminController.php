<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Studenta;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // ===============================
    // Courses
    // ===============================

    public function courseCreate()
    {
        return view('admin.courses.create');
    }

    public function courseIndex()
    {
        $listCourse = Course::latest()->get();
        return view('admin.courses.index', compact('listCourse'));
    }

    public function courseShow($slug)
    {
        $course = Course::with('teacher')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('admin.courses.show', compact('course'));
    }

    public function courseStore(Request $request)
    {
        $request->validate([
            'name'        => ['required', 'string'],
            'excerpt'     => ['required', 'string'],
            'description' => ['required', 'string'],
            'price'       => ['required', 'numeric'],
            'duration'    => ['required', 'string'],
            'category'    => ['required', 'string'],
            'level'       => ['required', 'string'],
            'thumbnail'   => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        $slug = Str::slug($request->name);

        $imageName = null;

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();
            $image->storeAs('thumbnail', $imageName, 'public');
        }

        Course::create([
            'name'        => $request->name,
            'excerpt'     => $request->excerpt,
            'description' => $request->description,
            'price'       => $request->price,
            'duration'    => $request->duration,
            'category'    => $request->category,
            'level'       => $request->level,
            'thumbnail'   => 'thumbnail/' . $imageName,
            'slug'        => $slug,
        ]);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course created successfully!');
    }

    // ===============================
    // Students
    // ===============================

    public function studentIndex()
    {
        $students = Studenta::all();
        return view('admin.student.index', compact('students'));
    }

    public function studentShow()
    {
        return view('admin.student.show');
    }

    public function dashboardstudent()
    {
        $courses = Course::all();
        return view('admin.student.studentdashboard', compact('courses'));
    }

    public function studentstore(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string|max:255',
            'age'       => 'required|integer|min:1',
            'gender'    => 'required|string|max:10',
            'address'   => 'required|string|max:255',
            'phone'     => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'email'     => 'required|email|unique:students,email',
        ]);

        $imagekanam = null;

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $imagekanam = 'img' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('students_images', $imagekanam, 'public');
        }

        Studenta::create([
            'name'      => $request->name,
            'age'       => $request->age,
            'gender'    => $request->gender,
            'address'   => $request->address,
            'phone'     => $request->phone,
            'course_id' => $request->course_id,
            'email'     => $request->email,
            'image_url' => $imagekanam,
        ]);

        return redirect()->route('admin.student.index')
            ->with('success', 'Student created successfully!');
    }

    // ===============================
    // Teachers
    // ===============================

    public function teacherCreate()
    {
        return view('admin.teacher.create');
    }

    public function teacherIndex()
    {
        $teachers = Teacher::latest()->get();
        return view('admin.teacher.index', compact('teachers'));
    }

    public function teacherShow()
    {
        return view('admin.teacher.show');
    }

    public function dashboardteacher()
    {
        return view('admin.teacher.teacherdashboard');
    }

    public function teacherAdminStore(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:teachers,email',
            'specialty' => 'required|string|max:255',
        ]);

        Teacher::create($validatedData);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher created successfully!');
    }
}