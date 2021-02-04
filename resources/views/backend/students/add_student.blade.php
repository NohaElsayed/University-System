@extends('backend.layout.master')
@section('title', 'Add_Student')
@section('content')

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Student</h2>
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
                        <form method="POST" action="{{route('store.student')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" name="department">
                                                @foreach($departments as $department)

                                               <option value="{{$department->id}}">{{$department->name}}</option>

                                               @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="UserName">
                                        @error('name')
                                        <span class="text-danger"> {{$message}}</span>

                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="phone" name="phone"  class="form-control" placeholder="Phone No.">
                                        @error('phone')
                                        <span class="text-danger"> {{$message}}</span>

                                        @enderror
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password"  class="form-control" placeholder="Password.">
                                            @error('password')
                                            <span class="text-danger"> {{$message}}</span>

                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                                        @error('email')
                                                <span class="text-danger"> {{$message}}</span>

                                                @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="photo" type="file" multiple />
                                        @error('photo')
                                            <span class="text-danger"> {{$message}}</span>

                                            @enderror
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


