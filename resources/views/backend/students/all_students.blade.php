+@extends('backend.layout.master')
@section('title', 'All_Students')
@section('content')

<!-- main content -->
<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Student</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>

                        @if(Session()->has('deleted'))
                        <div class="alert alert-danger">
                            {{Session()->get('deleted')}}

                        </div>
                        @endif
                <div class="body table-responsive">
                <table id="students" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Student.Photo</th>
                            <th>Department. Name</th>
                            <th>Student. Name</th>
                            <th>Student.Phone</th>
                            <th>Student.Email</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($students as $student)
                        <tr>
                           <td class="text-center"> @if($student->photo == NULL)
                                    {{'not Avaliable'}}
                        @else
                        <img width="100" height="100" alt="student" class="text-center"
                        src="/images/students/{{$student->photo}}">
                    @endif
                           </td>
                           <td class="text-center" style="padding:45px">{{$student->name}}</td>
                            <td class="text-center" style="padding:45px">{{$student->name}}</td>
                            <td class="text-center" style="padding:45px">{{$student->phone}}</td>
                            <td class="text-center" style="padding:45px">{{$student->email}}</td>
                            <td class="text-center"  style="padding:45px">
                                <a href="{{route('edit.student',$student->id)}}"class="btn btn-primary btn-sm"style="color: black">Edit</a>
                                <a href="{{route('delete.student',$student->id)}}" class="btn btn-danger btn-sm" style="color: black">Delete</a>
                                <a href="{{route('show.students.courses',$student->id)}}" class="btn btn-warning  btn-sm" style="color: black">show_students_courses</a>

                            </td>
                        </tr>
                            @endforeach

                    </tbody>
                </table>
                {{$students->links()}}
            </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->



@stop


