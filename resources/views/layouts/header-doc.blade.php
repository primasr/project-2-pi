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
                    </ul>
                </li>                  

                <li class="drop-down"><a href="">Table of Contents</a>
                    <ul>
                      <li><a href="#about">About API</a></li>
                      <li class="drop-down"><a href="#api-list">API List</a>
                        <ul>
                          <li><a href="#get-list">GET</a></li>
                          <li><a href="#post-list">POST</a></li>
                          <li><a href="#put-list">PUT</a></li>
                          <li><a href="#delete-list">DELETE</a></li>
                        </ul>
                      </li>                      
                    </ul>
                </li>              
            </ul>
        </nav><!-- .nav-menu -->

        {{-- <a href="#team" class="get-started-btn scrollto">Get Started</a> --}}

    </div>
{{-- </header><!-- End Header --> --}}

