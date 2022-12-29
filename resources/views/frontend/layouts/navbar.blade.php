<div class=" nav-bg bg-dark" style="background-color:#0b0c11 ">
    <div class="container">
        <nav class="navbar navbar-default shift">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="@if(Request::url() === route('home')) active @endif" href="{{ route('home') }}">Home</a></li>
                    <li><a class="@if(Request::url() === route('aboutus')) active @endif" href="{{ route('aboutus') }}">About</a></li>

                    {{-- @if(Request::url() === {{ route('aboutus') }})
                        class="active"
                    @endif --}}
                    <li><a class="@if(Request::url() === route('allServices')) active @endif" href="{{ route('allServices') }}">Services</a></li>
                    <li><a href="services.html">Appointment</a></li>
                    <li style="width: 100px"><a href="contact.html">Contact</a></li>
                    @auth
                        <a><img style="width:45px;border-radius:50%"
                                src="{{ asset('frontend/images/client/' . Auth::user()->image) }}" alt=""
                                srcset="">
                        </a>
                        <li class="dropdown" style="margin-right: 0">
                            {{-- <img style="border-radius: 50%" src="{{ asset('frontend/images/client/'.Auth::user()->image) }}" alt="" srcset=""> --}}

                            <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown"
                                aria-expanded="true">{{ Auth::user()->name }}<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">

                                <li><a href="typography.html">My Profile</a></li>
                                <li><a href="{{ route('clientLogout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a class="@if(Request::url() === route('loginPage')) active @endif" href="{{ route('loginPage') }}">login</a></li>
                    @endauth


                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </nav>
    </div>
</div>
