@include('backend.includes.header')
<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-blush">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Morphing Search  -->
{{-- <div id="morphsearch" class="morphsearch">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Search..." class="form-control" />
            <div class="show_result"></div>
        </div>
    <div></div>
    <!-- /morphsearch-content -->
    <span class="morphsearch-close"></span>
</div> --}}

<!-- Top Bar -->
@include('backend.includes.topbar')
<!-- #Top Bar -->

<!--Side menu and right menu -->
@include('backend.includes.sidebar')
<!--Side menu and right menu -->

<!-- main content -->
@yield('content')
<!-- main content -->

<div class="color-bg"></div>

@include('backend.includes.footer')
