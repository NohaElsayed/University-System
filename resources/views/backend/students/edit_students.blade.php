@extends('backend.layout.master')
@section('title', 'Update_Student')
@section('content')

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Update Student</h2>
            <small class="text-muted">Welcome to University</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
                    </div>
					<div class="body">
                        @if(Session()->has('success'))
                        <div class="alert alert-success">
                            {{Session()->get('success')}}

                        </div>
                          @endif
                        <form method="POST" action="{{route('update.student',$student->id)}}" enctype="multipart/form-data">
                            @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" value="{{$student->name}}" placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="phone" name="phone"  value="{{$student->phone}}" class="form-control" placeholder="Phone No.">
                                    </div>
                                </div>
                            </div>
                            <br>  <br>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" value="{{$student->email}}" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="/images/students/{{$student->photo}}"  width="400px" height="250px">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="photo" type="file" value="{{$student->photo}}" multiple />
                                    </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                                <button type="submit" class="btn btn-raised btn-default ">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
    </div>
</section>

<!-- main content -->



@stop


