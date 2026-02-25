<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;

class UserController extends Controller
{
       public function dashboardteacher(){
        return view('admin.teacher.teacherdashboard');
    } 
public function teacherUserStore(Request $request)
    {
        $courseData=$request->validate([
           'name'=>['required', 'string',],
            'description'=>['required', 'string'],
            "price"=>['required', 'numeric'],
            "duration"=>['required', 'string'],
            "category"=>['required', 'string'],
            // 'teacher_id'=>['required', 'exists:teachers,id'],
            "level"=>['required', 'string'],
        ]);
Course::create($courseData);

      

        return redirect()->route('teacher.dashboard')
            ->with('success', 'Course created successfully!');
    }



    public function dashboardstudent(){
        return view('admin.student.studentdashboard');
    }
}
