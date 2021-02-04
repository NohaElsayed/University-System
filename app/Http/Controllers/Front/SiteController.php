<?php

namespace App\Http\Controllers\Front;
 use App\Models\Courses;
 use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{



    public function save_contact(Request $request){
     Contact::create([
         'name' => $request->name,
         'message' => $request->message,
          'phone' => $request->phone,
          'email' => $request->email,
     ]);
     return redirect()->back();

  }
 public function student_courses()
{
   $student_id= session()->get('id');
   $student= Student::find($student_id);
   $courses=$student->courses;
   return view('frontend.show_student_courses',compact('courses'));
}

// check email and password of student
 public function login_student_submit(Request $request)
    {


        $email = $request->email;
        $pass = $request->password;

       $login =  Student::select('id','name','email','password')
                ->where('email',$email)
                ->where('password',$pass)->get();

       if($login ->count() == 1){

           foreach($login as $L){
             $request->Session()->put('name',$L->name);
             $request->Session()->put('id',$L->id);
             return redirect()->route('student.courses');
           }


       }else{
           return redirect()->back()->with('failed','Invalid Login.');
       }

    }

public function logout_student(Request $request)
   {
    $request->Session()->flush();
    // $request->Session()->forget('name');
    return redirect()->route('login.student');
   }

      //student_course
    public function student_course()
    {
        return view('frontend.student_course');
    }

    //show login_student
    public function login_student()
    {
        return view('frontend.loginstudent');
    }
   //show main page
    public function index()
    {
        return view('frontend.index');
    }

    //show service page
    public function service()
    {

        return view('frontend.servies');
    }

    //show contact page
    public function contact()
    {
        return view('frontend.contact');
    }
    //show  about page
    public function about()
    {
        return view('frontend.about');
    }
}

