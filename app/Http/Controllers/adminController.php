<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
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
        // dd($listCourse);
    return view('admin.courses.index', compact('listCourse'));
}

    public function courseShow($slug){
        // dd($request->all());
        $course = Course::with('teacher')->where('slug', $slug)->firstOrFail();
        return view('admin.courses.show', compact('course'));   
    }
// Course Store Method
    public function courseStore(Request $request)
    {
         $request->validate([
              'name'=>['required', 'string'],
              'excerpt'=>['required', 'string'],
              'description'=>['required', 'string'],
              "price"=>['required', 'numeric'],
               "duration"=>['required', 'string'],
              "category"=>['required', 'string'],
              "level"=>['required', 'string'],
              'thumbnail' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);
// Generate slug from course name
     $slug = Str::slug($request->name);

// Prepare course imge
   if($request->hasFile("thumbnail")){
            // fetch the orignal image from temporary server storage
            $image = $request->file("thumbnail");

            // name the image
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();



            // store the image
            $image->storeAs("thumbnail", $imageName, "public");
        }else{

        }



Course::create([
    'name' => $request->name,
    'excerpt' => $request->excerpt,
    'description' => $request->description,
    'price' => $request->price,
    'duration' => $request->duration,
    'category' => $request->category,
    'level' => $request->level,
    'thumbnail' => 'thumbnail/' . $imageName,
    'slug' => $slug,
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
  
  


/// Teacher Store Method

    public function teacherAdminStore(Request $request)
    {
        $validatedData = $request->validate([
           
        ]);

        Teacher::create($validatedData);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher created successfully!');
    }
}
