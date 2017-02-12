<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            {{--<a class="navbar-brand" href="{{ url('/') }}">Laravel</a>--}}
      <div class="pull-left"> <img src="/images/New_Cassel.png" style="height: 48px;"></div>
            <a class="navbar-brand">
                &nbsp New Cassel Work Order System
            </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          @if (Auth::check())
              @role('admin')
                    <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>

                <li><a href="{{ url('/apartment') }}">Apartments</a></li>
                <li><a href="{{ url('/resident') }}">Residents</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw "></i>Work Order<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a href="{{ url('/workorder') }}"><i class="fa fa-btn fa-fw fa-file-o"></i>Work Order Form</a></li>
                        <li><a href="{{ url('/workorderview') }}"><i class="fa fa-btn fa-fw fa-file-o"></i>View Work Order's</a></li>
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                    </ul>
                </li>
                {{--@endrole--}}

                {{-- Menu for Users with Administration Role Only --}}
                {{--@role('admin')--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw fa-cogs"></i>Administration<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-fw fa-user"></i>Users</a></li>
                        <li><a href="{{ url('/roles') }}"><i class="fa fa-btn fa-fw fa-users"></i>Roles</a></li>
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                    </ul>
                </li>
                @endrole
            </ul>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--<li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>
               <li><a href="{{ url('/login') }}">Login</a></li>--}}
                    {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->getFullName() }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a href="{{ url('/changepasswordpage') }}"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="{{ url('/help') }}"><i class="fa fa-btn fa-fw fa-question-circle"></i>Help</a></li>--}}
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
