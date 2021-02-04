<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('site.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route ('site.contact') }}">Contact</a></li>
               <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              @if(Session()->has('name'))
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs nav-link" style=" font-size:20px; margin-top:10px">{{ Session()->get('name') }}</span>
            </a>
            <ul class="dropdown-menu">

              <!-- Menu Footer-->
              <li class="user-footer">
                <div>
                  <a href="{{route ('logout.student') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
                    {{-- @if(Session()->has('name')) --}}

                         {{-- <li  class="nav-link" class="nav-item">{{ Session()->get('name') }}</li>
                        <li class="nav-item"><a class="nav-link" href="{{route ('logout.student') }}">Log Out</a></li> --}}
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{route ('login.student') }}">Login</a></li>

                    @endif






        </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
