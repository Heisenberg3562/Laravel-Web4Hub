<footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xl-6">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @guest

                            @if (Route::has('register'))
                                <li><a href="{{ url('/register') }}">Sign up</a></li>
                                <li><a href="{{ url('/login') }}">Sign In</a></li>
                            @endif
                            @else
                        <li>
                            <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>

                            @endguest
                    </ul>
                </div>
                <div class="col-sm-3 col-xl-5 offset-xl-0">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/contactus') }}">Contact us</a></li>
                        <li><a href="{{ url('/faq') }}">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Web4Hub</p>
        </div>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="https://anijs.github.io/lib/anijs/anijs.js"></script>
<script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal.js"></script>
