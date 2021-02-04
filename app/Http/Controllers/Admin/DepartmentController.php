<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Department;
    use App\Http\Requests\DepartmentRequest;

    class DepartmentController extends Controller
    {
        //edit Department
        public function edit_department($id)
        {
                $department = Department::find($id);
                $arr = array('department' => $department);
                return view('backend.departments.edit_department',$arr);
    }

        //update Department
        public function update_department($id ,Request $request)
        {
            $department =Department::find($id);
            $department->name = $request->name;
            $department->phone = $request->phone;
            $department->email = $request->email;
            $department->save();

            return redirect()->back()->with('success', 'Department Updated successefully');
        }

        //delete Department
        public function delete_department($id)
        {
                $department= Department::find($id);
                $department->delete();
                $department->student()->delete();
                return redirect()->back()->with('deleted','Department Deleted Successfuiy');

            }


        //show Departments
        public function show_department()
        {
            $departments =Department::paginate(BAGINATE);
            return view('backend.departments.show_department',compact('departments'));
        }
        //create Departments
        public function create_department()
        {
            return view('backend.departments.Add_department');
        }
        //Store Departments in DB
        public function store_department(DepartmentRequest $request)
        {
            Department::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email
            ]);
            return redirect()->back()->with('success', 'Department Created successefully');
        }
    }
