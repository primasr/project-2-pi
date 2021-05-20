<!-- ======= Header ======= -->
{{-- <header id="header" class="fixed-top "> --}}
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{ route('welcome') }}">GCC</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="/" class="logo mr-auto"><img src="{{ asset('Arsha/assets/img/Logo.png') }}" alt="" class="img-fluid"></a> --}}

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{ route('welcome') }}">Home</a></li>                
                {{-- <li><a href="#team">Team</a></li> --}}
                <li class="drop-down"><a href="">GCC API</a>
                  <ul>
                    <li><a href="{{ route('apiInstallation') }}">Installation</a></li>
                    <li><a href="{{ route('apiDocumentation') }}">Documentation</a></li>
                    {{-- <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li> --}}
                  </ul>
                </li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="drop-down">
                        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <ul>
                            <li>
                                <div>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>

                    </li>
                @endguest                
            </ul>
        </nav><!-- .nav-menu -->

        {{-- <a href="#team" class="get-started-btn scrollto">Get Started</a> --}}

    </div>
{{-- </header><!-- End Header --> --}}

