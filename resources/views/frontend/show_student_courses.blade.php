@extends('frontend.layout.master')
@section('title', 'About_Us')
@section('content')


<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2 class="text-center"  style="background: black; color:wheat; margin-top:10px; height:50px;padding-top:10px ">Student Name:{{ Session()->get('name')}}</h2>
        </div>
                <div class="body table-responsive" 
                >
                    @if(isset($courses)&&$courses ->count()>0)
                    <div class="row clearfix">
                        @foreach($courses as $course)
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="thumbnail card ">
                                @if($course->photo == NULL)
                                            {{'not Avaliable'}}
                                @else
                                <img width="530" height="200" alt="student" class="text-center"
                                src="/images/courses/{{$course->photo}}">
                            @endif

                                <div class="caption  body text-center">
                                    <h3>Name Course:{{$course->name}}</h3>
                                    <p>Price: <strong class="col-blush">${{$course->price}}</strong></p>
                                    <p>Name.: Prof. <strong>{{$course->prof_name}}</strong></p>
                                    <p>year: <strong class="col-green">{{$course->year}}</strong></p>
                                    <p>Details: <strong class="col-green">{{$course->details}}</strong></p>


                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
             <div class="alert alert-danger" style="margin-top:10px; ">
              <h2> No Courses for {{ Session()->get('name')}}</h2>
             </div>
                    @endif
            </div>
            </div>
        </div>
    </div>




</section>
@stop
