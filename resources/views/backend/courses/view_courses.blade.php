
    @extends('backend.layout.master')
    @section('title', 'Courses')
    @section('content')

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>{{ __('translate.All Courses') }}</h2>
                <small class="text-muted">{{ __('translate.Welcome to Swift application') }}</small>
            </div>
            @if(Session()->has('deleted'))
            <div class="alert alert-danger">
                {{Session()->get('deleted')}}

            </div>
            @endif
            <div class="row clearfix">
                @foreach($courses as $course)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="thumbnail card">
                        @if($course->photo == NULL)
                                    {{'not Avaliable'}}
                        @else
                        <img width="446" height="200" alt="student" class="text-center"
                        src="/images/courses/{{$course->photo}}">
                    @endif

                        <div class="caption  body text-center">
                            <h3>{{ __('translate.Name Course') }}:{{$course->name}}</h3>
                            <p>Price: <strong class="col-blush">${{$course->price}}</strong></p>
                            <p>Name.: Prof. <strong>{{$course->prof_name}}</strong></p>
                            <p>year: <strong class="col-green">{{$course->year}}</strong></p>
                            <p>Details: <strong class="col-green">{{$course->details}}</strong></p>
                            <p>Student.No: <strong class="col-green">45</strong></p>
                           <p> <a href="{{route('delete.courses',$course->id)}}" class="btn btn-danger btn-sm"
                            style="color: black">Delete</a></p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- main content -->
    @stop
