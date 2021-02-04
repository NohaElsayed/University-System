
@extends('backend.layout.master')
@section('title', 'Add_department')
@section('content')

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">

            <h2>Add Department Welcome to Unversity application</h2>
            <small class="text-muted">Dpartment text here...</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="header">
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
@endif
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <form  action="{{route('update.department',$department->id)}}" method="POST">
                                        @csrf
                                    <div class="form-line">
                                        <input type="text"  name="name" value="{{$department->name}}" class="form-control" placeholder="Department Name ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="phone" name="phone" value="{{$department->phone}}" class="form-control" placeholder="Phone of Department">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" name="email" value="{{$department->email}}" class="form-control" placeholder="Email of Department">
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
                                <button type="submit" class="btn btn-raised btn-default">Cancel</button>
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


