<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Courses
    public function courseCreate(){
        return view('admin.courses.create');
    }

   
   
   
   public function courseIndex(){
    $listCourse = Course::latest()->get();

    return view('admin.courses.index', compact('listCourse'));
}

    public function courseShow(){
        
        return view('admin.courses.show');
    }
// Course Store Method
    public function courseStore(Request $request)
    {
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'description'=>['required', 'string'],
            "price"=>['required', 'numeric'],
            "duration"=>['required', 'string'],
            "category"=>['required', 'string'],
            // 'teacher_id'=>['required', 'exists:teachers,id'],
            "level"=>['required', 'string'],
        ]);

       
        Course::create([
            'name' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'category' => $request->category,
            // 'teacher_id' => $request->teacher_id,
            'level' => $request->level,
        ]);
        return redirect()->route('admin.courses.index')
            ->with('success', 'Course created successfully!');
    }

    // Students
    public function studentIndex(){
        return view('admin.student.index');
    }

    public function studentShow(){
        return view('admin.student.show');
    }

    // Teachers
    public function teacherCreate(){
        return view('admin.teacher.create');
    }

    public function teacherIndex(){
        return view('admin.teacher.index');
    }

    public function teacherShow(){
        return view('admin.teacher.show');
    }
      public function dashboardstudent(){
        return view('admin.student.studentdashboard');
    }
     public function dashboardteacher(){
        return view('admin.teacher.teacherdashboard');
    } 


/// Teacher Store Method

    public function teacherStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'specialty' => 'required|string|max:255',
        ]);

        Teacher::create($validatedData);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher created successfully!');
    }
}
