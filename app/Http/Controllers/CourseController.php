<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Student;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function aboutPage(){
        return view('sites.about-us');
    }
    public function contactPage(){
        return view('sites.contact-us');
    }
    public function addToCart($slug){
   $addToCard = Course::where("slug", $slug)->first();
        return view('sites.add-to-cart', compact('singleCourse'));
    }

//    Courses page
    public function homePage()

    {
        $course= Course::latest()->get();
        return view('sites.home', compact('course'));
    }

    public function singleCourse($slug)
    {
        $singleCourse = Course::with('teacher')->where("slug", $slug)->first();
        return view('sites.course-detail', compact('singleCourse'));
  }


  // Teachers page

  public function allTeachers()
    {
        $teacher = Teacher::latest()->get();
        return view('sites.teachers', compact('teacher'));
    }

  public function singleTeacher($slug)

    {
        $singleTeacher = Teacher::with('courses')->where("slug", $slug)->first();
        return view('sites.teacher-detail', compact('singleTeacher'));
}
}
