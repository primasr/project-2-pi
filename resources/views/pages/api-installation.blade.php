@extends('layouts.app-inner')

@section('title', 'API Installation')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>API Installation</li>
            </ol>
            <h2>API Installation</h2>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <section class="inner-page">
          <div class="container">
            <div class="row">
                                 
              <!-- ======= Services Section ======= -->
              <section id="services" class="services section-bg" style="background-color: white">
                <div class="container" data-aos="fade-up">

                  <div class="section-title">
                    <h2>Installation</h2>
                    <p>Several things that need to be installed in order to support the use of Github Commits Counter API</p>
                  </div>

                  <div class="row justify-content-center">

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bxl-python"></i></div>                        
                        <h4><a href="#">Python</a></h4>
                        <p>Python will help you to visualize the response obtained by request with its library, <q style="font-style: italic">json.tool</q></p>
                        <p><br></p>
                        <p>Click <a href="https://www.howtogeek.com/197947/how-to-install-python-on-windows/" target="_blank">here</a> or <a href="https://phoenixnap.com/kb/how-to-install-python-3-windows" target="_blank">here</a> to find out how to install python on your laptop </p>
                        <p><br></p>
                        <p>And click <a href="https://coderwall.com/p/taqjma/pretty-print-json-responses-returned-by-curl-requests-in-command-line" target="_blank">here</a> to find out how to Pretty print json responses returned by curl requests in command line</p>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bx-bolt-circle"></i></div>
                        <h4><a href="#">Postman</a></h4>
                        <p>Postman is a collaboration platform for API development. Postman's features simplify each step of building an API and streamline collaboration so you can create better APIs—faster.</p>
                        <p><br></p>
                        <p>You can easily download and install it <a href="https://www.postman.com/downloads/" target="_blank">here</a></p>
                      </div>
                    </div>

                  </div>

                </div>
              </section><!-- End Services Section -->             
            
                
            </div>
          </div>
        </section>
    
    </main><!-- End #main -->        
@endsection