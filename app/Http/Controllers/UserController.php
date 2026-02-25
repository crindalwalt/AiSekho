<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\Teacher;
use App\Models\Course;
=======

>>>>>>> 837083a95f52d3910412d109c4fc742640e94c7d
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
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
=======
    //
>>>>>>> 837083a95f52d3910412d109c4fc742640e94c7d
}
