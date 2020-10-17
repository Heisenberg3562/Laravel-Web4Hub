
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark clean-navbar">
            <div class="container"><a class="navbar-brand logo" href="#">Web4Hub</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item item" role="presentation"><a class="nav-link" href="{{ url('/features') }}">FEATURES</a></li>
                        <li class="nav-item item" role="presentation"><a class="nav-link" href="{{ url('/aboutus') }}">ABOUT</a></li>
                        <li class="nav-item item" role="presentation"><a class="nav-link" href="{{ url('/contactus') }}">CONTACT US</a></li>
{{--                        @if (Route::has('login'))--}}
{{--                                @auth--}}
{{--                                <li class="nav-item item" role="presentation"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>--}}
{{--                                @else--}}
{{--                                <li class="nav-item item" role="presentation"><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>--}}

{{--                                    @if (Route::has('register'))--}}
{{--                                    <li class="nav-item item" role="presentation"><a class="btn btn-primary" href="{{ route('register') }}">Register</a></li>--}}
{{--                                    @endif--}}
{{--                                @endauth--}}

{{--                        @endif--}}
                    <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


