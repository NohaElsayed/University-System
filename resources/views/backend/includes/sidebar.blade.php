
<!--Side menu and right menu -->

<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="{{asset('assets/images/random-avatar7.jpg')}}" alt=""> </div>
            <div class="admin-action-info"> <span>Welcome</span>
                <h3> {{ Session()->get('userName')}}</h3>
                </ul>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active open"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('all.student')}}">All Students</a></li>
                        <li><a href="{{route('create_student')}}">Add Students</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('site.courses')}}">All Courses</a></li>
                        <li><a href="{{route('site.addcources')}}">Add Courses</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Departments</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('show.department')}}">All Departments</a></li>
                        <li><a href="{{route('create.department')}}">Add Departments</a></li>
                    </ul>
                </li>

                </li>
              @yield('name')
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

    <!-- #END# Right Sidebar -->
</section>
<!--Side menu and right menu -->
