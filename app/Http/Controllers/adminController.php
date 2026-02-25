<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
=======
>>>>>>> 837083a95f52d3910412d109c4fc742640e94c7d
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher; 
use App\Models\Studenta;
use Illuminate\Http\Request;
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
    public function studentIndex(){$students = Studenta::all();
        return view('admin.student.index', compact('students'));
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
<<<<<<< HEAD
  
  
=======
      public function dashboardstudent(){$courses = Course::all();
        return view('admin.student.studentdashboard', compact('courses'));
    }
     public function dashboardteacher(){
        return view('admin.teacher.teacherdashboard');
    } 
>>>>>>> 837083a95f52d3910412d109c4fc742640e94c7d


/// Teacher Store Method

    public function teacherAdminStore(Request $request)
    {
        $validatedData = $request->validate([
<<<<<<< HEAD
           
=======
            'name' => 'required|string|max:255',
            
            'email' => 'required|email|unique:teachers,email',
            'specialty' => 'required|string|max:255',
>>>>>>> 837083a95f52d3910412d109c4fc742640e94c7d
        ]);

        Teacher::create($validatedData);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher created successfully!');
    }
    public function studentstore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            
            'email' => 'required|email|unique:students,email',
            'course_id' => 'required|exists:courses,id',
        ]);
        if ($request->hasFile('image_url')) {
    // 1. Pehle file ka object lein
    $file = $request->file('image_url');
    
    // 2. Filename banayein (Extension object se lein)
    $imagekanam = 'img' . time() . '.' . $file->getClientOriginalExtension();
    
    // 3. Ab file ko store karein
    $file->storeAs('public/students_images', $imagekanam);
}
        Studenta::create([
            'name'      => $request->name,
    'age'       => $request->age,
    'gender'    => $request->gender,
    'address'   => $request->address,
    'phone'     => $request->phone,
    'course_id' => $request->course_id,
    'email'     => $request->email,
    'image_url' => $imagekanam ?? null,

        ]);
        
        return redirect()->route('admin.student.index')
            ->with('success', 'Student created successfully!');
    }
}
