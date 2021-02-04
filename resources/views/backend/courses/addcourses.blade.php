
@extends('backend.layout.master')
@section('title', 'Add_Courses')
@section('content')

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add_Courses</h2>
            <small class="text-muted">Welcome to Univesity application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2> Course Basic Information </h2>
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
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <form method="POST" action="{{route('store.courses')}}" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Name_Course">
                                        @error('name')
                                        <span class="text-danger"> {{$message}}</span>

                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="prof_name" class="form-control" placeholder="Professor_Name">
                                        @error('prof_name')
                                        <span class="text-danger"> {{$message}}</span>

                                        @enderror
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="year" class="form-control" placeholder="translate.Year of Study">
                                        @error('year')
                                        <span class="text-danger"> {{$message}}</span>

                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="details" class="form-control no-resize" placeholder="Course Description"></textarea>
                                        @error('details')
                                        <span class="text-danger"> {{$message}}</span>

                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="dz-message">
                                            <h3>translate.Drop files here or click to upload.</h3>
                                             </div>
                                        <div class="fallback">
                                            <input name="photo" type="file" />
                                            @error('photo')
                                            <span class="text-danger"> {{$message}}</span>

                                            @enderror
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-12">

                                <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">translate.submite</button>

                            </div>
                        </form>
                        </div>

                    </div>
				</div>
			</div>
		</div>

    </div>
</section>
<!-- main content -->
@stop


