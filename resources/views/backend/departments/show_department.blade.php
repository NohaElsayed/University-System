
@extends('backend.layout.master')
@section('title', 'Show_Department')
@section('content')

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ALL DEPARTMENTS</h2>
            <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>All Departments</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                @if(Session()->has('deleted'))
                <div class="alert alert-danger">
                    {{Session()->get('deleted')}}

                </div>
                @endif

                    <div class="body table-responsive">
                        <table id="departments" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Department. Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>No.Studnt</th>
                                    <th>operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($departments as $department)
                                <tr>
                                    <td class="text-center" style="padding:45px">{{$department->name}}</td>
                                    <td class="text-center" style="padding:45px">{{$department->phone}}</td>
                                    <td class="text-center" style="padding:45px">{{$department->email}}</td>
                                    <td class="text-center" style="padding:45px"><span class="badge pull-right">{{App\Models\Department::count()}}</span></td>
                                    <td></td>
                                    <td class="text-center" class="text-center" style="padding:45px">
                                        <a href="{{route('edit.department',$department->id)}}"class="btn btn-primary btn-sm"style="color: black">Edit</a>
                                        <a href="{{route('delete.department',$department->id)}}" class="btn btn-danger btn-sm" style="color: black">Delete</a>

                                    </td>
                                </tr>
                                    @endforeach

                            </tbody>
                        </table>
                        {{$departments->links()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>

<!-- main content -->



@stop
