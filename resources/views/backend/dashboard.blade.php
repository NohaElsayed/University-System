
@extends('backend.layout.master')
@section('title', 'Dashboard')
@section('content')

<!-- main content -->
{{-- <section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to University application</small>
        </div>

        <div class="row clearfix top-report">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="text-center"> {{ App\Models\Department::count() }}</span></h3>
                        <p class="text-muted"> Total Number of Department</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">10% higher than last month</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="text-center">{{ App\Models\Student::count() }}</h3>
                        <p class="text-muted">Total  Number Of Students</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last month</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="text-center">{{ App\Models\Course::count() }}</h3>
                        <p class="text-muted"> Total Number Of Courses</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last month</span> </div>
                </div>
            </div>



</section> --}}
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#income"><i class="zmdi zmdi zmdi-case-download"></i> <span>Income Report</span></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sales"><i class="zmdi zmdi-file-text"></i> <span>Sales Report</span></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="income">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="info-box-3 bg-green">
                            <div class="icon">
                                <div class="chart chart-bar">6,8,6,8,10,2,11,4</div>
                            </div>
                            <div class="content">
                                <div class="text">Total Income</div>
                                <div class="number">$127 526</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="info-box-3 bg-blush">
                            <div class="icon">
                                <div class="chart chart-bar">6,7,3,8,10,5,3,4</div>
                            </div>
                            <div class="content">
                                <div class="text">Unique Students</div>
                                <div class="number">457</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="info-box-3 bg-blue">
                            <div class="icon"> <span class="chart chart-line">9,4,6,5,6,4,7,3</span> </div>
                            <div class="content">
                                <div class="text">Monthly Income</div>
                                <div class="number">$125</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="info-box-3 bg-blue-grey">
                            <div class="icon">
                                <div class="chart chart-bar">4,6,-3,-1,2,-2,4,6</div>
                            </div>
                            <div class="content">
                                <div class="text">Net Profit</div>
                                <div class="number">$1 063</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>University Budget</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="line_chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="header">
                                <h2>Income Analysis <small >18% High then last month</small></h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="stats-report">
                                  <div class="stat-item">
                                    <h5>Overall</h5>
                                    <b class="col-indigo">70.40%</b></div>
                                  <div class="stat-item">
                                    <h5>Montly</h5>
                                    <b class="col-indigo">25.80%</b></div>
                                  <div class="stat-item">
                                    <h5>Day</h5>
                                    <b class="col-indigo">12.50%</b></div>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                                         data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                                         data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="header">
                                <h2>Income Analysis <small>18% High then last month</small></h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="stats-report">
                                  <div class="stat-item">
                                    <h5>Overall</h5>
                                    <b class="col-blue-grey">80.40%</b></div>
                                  <div class="stat-item">
                                    <h5>Montly</h5>
                                    <b class="col-blue-grey">13.00%</b></div>
                                  <div class="stat-item">
                                    <h5>Day</h5>
                                    <b class="col-blue-grey">9.50%</b></div>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
                                         data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
                                         data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="header">
                                <h2>Income Analysis <small>18% High then last month</small></h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="stats-report">
                                  <div class="stat-item">
                                    <h5>Overall</h5>
                                    <b class="col-green">84.60%</b></div>
                                  <div class="stat-item">
                                    <h5>Montly</h5>
                                    <b class="col-green">15.40%</b></div>
                                  <div class="stat-item">
                                    <h5>Day</h5>
                                    <b class="col-green">5.10%</b></div>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
                                         data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
                                         data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane page-calendar" id="sales">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>RADAR CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="radar_chart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>PIE CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="pie_chart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>BAR CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="bar_chart" height="120"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->
<!-- main content -->



@stop


