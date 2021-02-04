<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Traits\StudentTrait;
use App\Http\Requests\CourseRequest;
class CourseController extends Controller
{

    //show_students_courses
    public function show_students_courses($id){
        $student =  Student::find($id);
        $courses= $student->courses;
         $all_courses = Course::get();
        return view('backend.students.show_student_courses',compact('student','courses','all_courses'));
    }

    //save_student_course
    public function save_student_course(Request $request){
        $student = Student::find($request->student_id);
        $student->courses()->syncWithoutDetaching($request->all_courses);

        return redirect()->back()->with('success','Courses added succesfuly to Student.');
    }
    //show Student
    public function  student_course(){
        return view('show_student');
    }





    public function create_courses(){
       return view('backend.courses.addcourses');
   }

   //delete Courses
   public function delete_courses($id)
   {
    $courses= Course::find($id);
    $courses->delete();
    return redirect()->back()->with('deleted','Department Deleted Successfuiy');


   }
    //view courses
   public function view_courses(){
    $courses = Course::get();
    return view('backend.courses.view_courses',compact('courses'));
}
    //store_courses
 public function store_courses(CourseRequest $request){
       //insert photo courses into DB
      $file_name=$this->save_photo($request->photo,'images/courses');
    //    //insert courses into DB
    Course::create([
        'name' => $request->name,
        'prof_name' => $request->prof_name,
        'year' => $request->year,
        'details' => $request->details,
         'photo' => $file_name,
    ]);
    return redirect()->back()->with('success', 'Courses Created successefully');
// return $request;
 }

}
