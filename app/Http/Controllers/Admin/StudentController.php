<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use App\Models\Department;
use App\Traits\StudentTrait;

class StudentController extends Controller
{
    use StudentTrait;
    public function create_student(){
        $departments=Department::get();
        return view('backend.students.add_student',compact('departments'));
    }

    //update Students
 public function update_students($id ,Request $request)
 {
    $students =Student::find($id);
    if ($request->has('photo')) {
        $file_name=$this->save_photo($request->photo, 'images/students');
        $students->photo =$file_name;
    }

    $students->name = $request->name;
    $students->phone = $request->phone;
    // $students->birthday = $request->birthday;
    $students->email = $request->email;
    $students->department = $request->department;
    $students->save();
     return redirect()->back()->with('success', 'Student Updated successefully');
 }

 //edit Students
 public function edit_students($id)
 {
         $students = Student::find($id);
         $arr = array('student' => $students);
         return view('backend.students.edit_students',$arr);
}

 //delete Students
 public function delete_students($id)
 {
         $students= Student::find($id);
         $students->delete();
         unlink("images/students/$students->photo");
         $students->courses()->delete();
         return redirect()->back()->with('deleted','Students Deleted Successfuiy');

     }

        //show_students
    public function show_students()
    {
        $students= Student::paginate(BAGINATE);
        return view('backend.students.all_students', compact('students'));
    }
    public function store_student(StudentRequest $request){
         //insert new Student into DB
         $file_name=$this->save_photo($request->photo,'images/students');

        //insert new product into DB
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'photo' => $file_name,
            'department_id' =>$request->department,
        ]);
        $request->Session()->flash('success', 'Student Created successefully');
        return redirect()->route('create_student');
        // return redirect()->back()->with('success', 'Student Created successefully');
     }


}
