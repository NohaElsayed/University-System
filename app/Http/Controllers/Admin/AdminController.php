<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
// show loginadmin page
public function index(){
    return view('backend.loginadmin');
}

// check login admin
public function login(Request $request){
    $email = $request->email;
    $pass = $request->password;

   $login =  Admin::select('username','email','password')
            ->where('email',$email)
            ->where('password',$pass)->get();

   if($login ->count() == 1){

       foreach($login as $L){
         $request->Session()->put('userName',$L->username);
         $request->Session()->put('role',$L->role);
         return redirect()->route('dashboard');
       }


   }else{
       return redirect()->back()->with('failed','Invalid Login.');
   }

}

//  logout of admin
public function logout(Request $request){
   $request->Session()->flush();
   return redirect()->route('index');
}
public function dashboard(){
   return view('admin.dashboard');
}
    // show dashboard of admin
        public function show(){
            return view('backend.dashboard');
    }
     //show_students_courses
    public function show_students_courses($id){
        $student =  Student::find($id);
        $courses= $student->courses;
         $all_courses = Course::get();
        return view('frontend.show_student_courses',compact('student','courses','all_courses'));
    }

}
