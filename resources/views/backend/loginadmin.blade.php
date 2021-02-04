@include('backend.includes.header')
@section('title', 'Login')
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span> University</span>Login <span class="msg">Sign in to start your session</span></h1>
        @if( Session()->has('failed'))
        <div class="alert alert-danger">
            {{ Session()->get('failed')}}
        </div>
      @endif
        <div class="col-sm-12">
            <form id="sign_in" method="POST" action="{{route('admin.login')}}">
                @csrf
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                {{-- <div class="">
                    <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                    <label for="rememberme">Remember Me</label>
                </div> --}}
                <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-raised waves-effect g-bg-blush2" value="SIGN IN" >
                    {{-- <input type="submit" name="submit" class="btn btn-raised waves-effect g-bg-blush2" value="SIGN UP" > --}}
                    {{-- <a href="index.html" class="btn btn-raised waves-effect g-bg-blush2" >SIGN IN</a> --}}
                    {{-- <a href="sign-up.html" class="btn btn-raised waves-effect" >SIGN UP</a> --}}
                </div>
                {{-- <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div> --}}
            </form>
        </div>
    </div>
</div>
<div class="theme-bg"></div>
<!-- Jquery Core Js -->
@include('backend.includes.header')
