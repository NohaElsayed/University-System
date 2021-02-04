<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">Swift University</a> </div>
        <ul class="nav navbar-nav navbar-right">

             @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">Settings </a>
                <ul class="dropdown-menu">

                    <li class="user-footer">
                        <div class="pull-right">
                          <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>

            <!-- #END# Notifications -->
            <!-- Tasks -->

            <!-- #END# Tasks -->
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
