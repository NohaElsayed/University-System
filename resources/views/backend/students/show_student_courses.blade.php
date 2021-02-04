@extends('backend.layout.master')
@section('title','students')
@section('content')


<!-- main content -->
<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Student:{{ $student->name }}</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
                <div class="body table-responsive">
                    @if(isset($courses)&&$courses ->count()>0)
                    <div class="row clearfix">
                        @foreach($courses as $course)
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="thumbnail card">
                                @if($course->photo == NULL)
                                            {{'not Avaliable'}}
                                @else
                                <img width="400" height="200" alt="student" class="text-center"
                                src="/images/courses/{{$course->photo}}">
                            @endif

                                <div class="caption  body text-center">
                                    <h3>Name Course:{{$course->name}}</h3>
                                    <p>Name.: Prof. <strong>{{$course->prof_name}}</strong></p>
                                    <p>year: <strong class="col-green">{{$course->year}}</strong></p>
                                    <p>Details: <strong class="col-green">{{$course->details}}</strong></p>


                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
             <div class="alert alert-danger">
               No Courses for {{ $student->name }}
             </div>
                    @endif
            </div>
            </div>
        </div>
    </div>




</section>
<!-- main content -->
<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add_course to:{{  $student->name  }}</h2>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" style="background: #ddd;padding: 20px 30px;font-size: 20px;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Add Courses To Student
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="card card-body" style="border: 2px">
                        <form action="{{route('save.student.course')}}" method="POST">
                        @csrf
                        <input type="hidden" name="student_id" value="{{$student->id}}" ><br>
                        <select name="all_courses[]" class="form-control" multiple >
                            <option>Select Courses</option>
                            @foreach($all_courses as $all)
                                <option value="{{ $all->id }}">{{ $all->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success" style="color: wheat">Save</button>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>

</section>



@stop
