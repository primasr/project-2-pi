@extends('layouts.app-inner-doc')

@section('title', 'API Documentations')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>API Documentations</li>
            </ol>
            <h2>API Documentations</h2>
    
          </div>
        </section><!-- End Breadcrumbs -->        
    
        <section class="inner-page">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-8 col-lg-6 pb-5">                                      

                  <!-- ======= About API Section ======= -->
                  <section id="about" class="about">
                    <div class="container" data-aos="fade-up">

                      <div class="section-title">
                        <h2>About API</h2>
                      </div>

                      <div class="row content">
                        <div class="col-lg-12 pt-4 pt-lg-0">
                          <p>
                            Welcome to the Github Commits Counter API Documentation
                          </p>
                          <p>
                            The Github Commits Counter API allows you to manage history or log repository information from Github Commits Counter web application using conventional HTTP requests. The endpoints are intuitive and powerful, allowing you to easily make calls to retrieve information or to execute actions.
                          </p>
                          <p>
                            The API documentation will start with a general overview about the design and technology that has been implemented, followed by reference information about specific endpoints.
                          </p>                          
                        </div>
                      </div>

                    </div>
                  </section><!-- End About API Section -->

                  <hr>

                  <!-- ======= Why Us Section ======= -->
                  <section id="api-list" class="why-us section-bg" style="background-color: white">
                    <div class="container-fluid" data-aos="fade-up">

                      <div class="row">

                        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                          <div class="content">
                            <div class="section-title">
                              <h2>API LIST</h2>
                            </div>
                            <p>
                              The Github Commits Counter API has several end points as follows
                            </p>
                          </div>
                          
                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th colspan="3" style="text-align: center">Methods List</th>
                              </tr>
                              <tr>
                                <th>No</th>
                                <th>Methods</th>
                                <th style="text-align: center">Details</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>GET</td>
                                <td>The read function is similar to a search function. It allows users to search and retrieve specific records in the table and read their values. <br>( Gathers repositories information )</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>POST</td>
                                <td>The create function allows users to create a new record in the database. <br>( Creating a new user/register, login, and logout )</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>PUT</td>
                                <td>The update function is used to modify existing records that exist in the database. To fully change a record, users may have to modify information in multiple fields. <br>( Updating repository information )</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>DELETE</td>
                                <td>The delete function allows users to remove records from a database that is no longer needed. <br>( Deleting a repository from database )</td>
                              </tr>
                            </tbody>
                          </table>
                          
                          <p><br></p>                          

                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th colspan="4" style="text-align: center; border-bottom-style: none;">HTTP Header Information</th> 
                              </tr>
                              <tr>
                                <td colspan="4" style="text-align: center; border-top-style: none;">Let the client and the server pass additional information with an HTTP request or response.
                                  You can write it briefly using an alias</td>
                              </tr>
                              <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 40%">Header Name</th>
                                <th style="width: 5%">Aliases</th>
                                <th style="width: 50%">Details</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>--location</td>
                                <td>-L</td>
                                <td>which specifies the Location response header, can be automatically followed by specifying the L option</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>--request</td>
                                <td>-X</td>
                                <td>The X option lets you change the HTTP method used. By default, GET is used</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>--header</td>
                                <td>-H</td>
                                <td>In this case you need to explicitly set the Content-Type header, by using the H option</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>--form</td>
                                <td>-F</td>
                                <td>To post to a form like this with curl</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>--data-urlencode</td>
                                <td></td>
                                <td>Recent curl versions can in fact url-encode POST data for you</td>
                              </tr>
                            </tbody>
                          </table>

                          <p><br></p>

                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th colspan="4" style="text-align: center">Common HTTP Header Used</th>
                              </tr>
                              <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 40%">Header</th>
                                <th style="width: 5%">Header Type</th>
                                <th style="width: 50%; text-align: center">Details</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>--location</td>
                                <td>-L</td>
                                <td>Is clear above</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>--request GET/POST/PUT/DELETE</td>
                                <td>-X</td>
                                <td>Is clear above</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Authorization: Bearer {Your Bearer Token}</td>
                                <td>-H</td>
                                <td>Request header contains the credentials to authenticate a user agent with a server <br>( Bearer token can be obtained from register or login)</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Content-Type: application/json</td>
                                <td>-H</td>
                                <td>The header is there so your app can detect what data was returned and how it should handle it <br>(handled json response)</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Content-Type: application/x-www-form-urlencoded</td>
                                <td>-H</td>
                                <td>The keys and values are encoded in key-value tuples. <br>Used to submit the form with POST method</td>
                              </tr>
                            </tbody>
                          </table>

                          <p><br></p>

                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th colspan="3" style="text-align: center; border-bottom-style: none;">Line Continuation Character</th>                                                                                              
                              </tr>
                              <tr>
                                <td colspan="3" style="text-align: center; border-top-style: none;">In case use cURL, there are several option Set a character used to mark the continuation of a statement on the next line</td>
                              </tr>
                              <tr>
                                <th>No</th>
                                <th>OS</th>
                                <th>Command</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>OSX/Linux</td>
                                <td>\</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Windows Cmd</td>
                                <td>^</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Windows Powershell</td>
                                <td>` (backtick)</td>
                              </tr>
                            </tbody>
                          </table>

                          <p><br></p>

                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th colspan="3" style="text-align: center; border-bottom-style: none;"><span style="color: red; text-align: center">! Notes !</span></th>                                                                                              
                              </tr>                              
                              <tr>
                                <td colspan="3" style="border-top-style: none; border-bottom-style: none;">the process of making this documentation is carried out during the <q>development</q> period</td>
                              </tr>
                              <tr>
                                <td colspan="3" style="border-top-style: none; border-bottom-style: none;">Base_url to use the API is: <p></p> <p style="text-align: center"><q>http://localhost/project-2-primasr/public/api/</q></p></td>
                              </tr>
                              <tr>
                                <td colspan="3" style="border-top-style: none;">when this website has been deployed, you can replace <q>http://localhost/project-2-primasr/public/</q> with the new domain later</td>
                              </tr>
                            </thead>                            
                          </table>

                          {{-- GET LIST --}}
                          <div class="sub-judul" id="get-list">
                            <h3>GET</h3>
                            <p>
                              
                            </p>
                          </div>
                          
                          <div class="accordion-list">
                            <ul>
                              <li>
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-1a" data-target=".multi-collapse-1" aria-expanded="false" aria-controls="accordion-list-1a accordion-list-1b"><span>01</span> / <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1a" class="collapse multi-collapse-1" data-parent=".accordion-list">
                                  
                                    <div>
                                      <p><br></p>
                                      
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Get all repository information</td>
                                            <td>No</td>
                                          </tr>
                                        </tbody>
                                      </table>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "GET"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Content-Type: application/json"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>

                                  

                                  <p style="padding-top: 50px">
                                    <span><a href="{{ asset('img/documentation/get-all.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="GET / - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>
                                  </p>                                                                  
                                </div>
                              </li>

                              <li>                                
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-2a" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="accordion-list-2a accordion-list-2b"><span>02</span> /all <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2a" class="collapse multi-collapse-2" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>
                                      
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Get all repository information</td>
                                            <td>No</td>
                                          </tr>
                                        </tbody>
                                      </table>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "GET"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Content-Type: application/json"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                    <p style="padding-top: 50px">
                                      <span><a href="{{ asset('img/documentation/get-all.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="GET /all - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>
                                    </p>  
                                </div>
                              </li>

                              <li>                                
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-3a" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="accordion-list-3a accordion-list-3b"><span>03</span> /me <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3a" class="collapse multi-collapse-3" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Get current user information</td>
                                            <td>Yes</td>
                                          </tr>
                                        </tbody>
                                      </table>                                                                            

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "GET"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Content-Type: application/json"</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>
                                            <td>--header "Authorization: Bearer {Your Bearer Token}"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                  <p style="padding-top: 50px">
                                    <span><a href="{{ asset('img/documentation/get-names-success.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="GET /names/{repo_name} - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>                                    
                                  </p>
                                  <p style="padding-top: 25px">
                                    <span><a href="{{ asset('img/documentation/get-names-fail.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="GET /names/{repo_name} - Repository Name Not Found" style="float: right">Response Fail<i class="bx bx-landscape"></i></a></span>                                    
                                  </p> 
                                </div>
                              </li>

                              <li>                                
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-4a" data-target=".multi-collapse-4" aria-expanded="false" aria-controls="accordion-list-4a accordion-list-4b"><span>04</span> /names/{repo_name} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-4a" class="collapse multi-collapse-4" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Get specific repository information</td>
                                            <td>No</td>
                                          </tr>
                                        </tbody>
                                      </table>                                                                            

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "GET"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Content-Type: application/json"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                    <p style="padding-top: 50px">
                                      <span><a href="{{ asset('img/documentation/me-success.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="GET /me - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>
                                    <p style="padding-top: 25px">
                                      <span><a href="{{ asset('img/documentation/me-fail.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="GET /me - Unauthenticated" style="float: right">Response Fail<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>                                   
                                </div>
                              </li>

                            </ul>
                          </div>


                          {{-- POST LIST --}}
                          <div class="sub-judul" id="post-list">
                            <h3>POST</h3>
                            <p>
                              
                            </p>
                          </div>
                          
                          <div class="accordion-list">
                            <ul>
                              <li>
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-5a" data-target=".multi-collapse-5" aria-expanded="false" aria-controls="accordion-list-5a accordion-list-5b"><span>01</span> /register <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>                                
                                <div id="accordion-list-5a" class="collapse multi-collapse-5" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>
                                      
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Create an account/user</td>
                                            <td>No</td>
                                          </tr>
                                        </tbody>
                                      </table>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "POST"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Content-Type: application/x-www-form-urlencoded"</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>                                        
                                            <td>--data-urlencode "email= {youremail@example.com}"</td>
                                          </tr>
                                          <tr>
                                            <td>5</td>                                        
                                            <td>--data-urlencode "password= {yourpassword}"</td>
                                          </tr>
                                          <tr>
                                            <td>6</td>                                        
                                            <td>--data-urlencode "name= {yourname}"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                    <p style="padding-top: 50px">
                                      <span><a href="{{ asset('img/documentation/register-success.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="POST /register - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>
                                    <p style="padding-top: 25px">
                                      <span><a href="{{ asset('img/documentation/register-fail.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="POST /register - Password is not long enough" style="float: right">Response Fail<i class="bx bx-landscape"></i></a></span>                                    
                                    </p> 
                                </div>
                              </li>

                              <li>
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-6a" data-target=".multi-collapse-6" aria-expanded="false" aria-controls="accordion-list-6a accordion-list-6b"><span>02</span> /login <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>                                
                                <div id="accordion-list-6a" class="collapse multi-collapse-6" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>
                                      
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Login</td>
                                            <td>No</td>
                                          </tr>
                                        </tbody>
                                      </table>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "POST"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Content-Type: application/x-www-form-urlencoded"</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>                                        
                                            <td>--data-urlencode "email= {youremail@example.com}"</td>
                                          </tr>
                                          <tr>
                                            <td>5</td>                                        
                                            <td>--data-urlencode "password= {yourpassword}"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                    <p style="padding-top: 50px">
                                      <span><a href="{{ asset('img/documentation/login-success.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="POST /login - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>
                                    <p style="padding-top: 25px">
                                      <span><a href="{{ asset('img/documentation/login-fail.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="POST /login - Email or Password incorrect " style="float: right">Response Fail<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>  
                                </div>
                              </li>

                              <li>
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-7a" data-target=".multi-collapse-7" aria-expanded="false" aria-controls="accordion-list-7a accordion-list-7b"><span>03</span> /logout <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>                                
                                <div id="accordion-list-7a" class="collapse multi-collapse-7" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>
                                      
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Logout / destroy the bearer token</td>
                                            <td>Yes</td>
                                          </tr>
                                        </tbody>
                                      </table>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "POST"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Authorization: Bearer {Your Bearer Token}"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                    <p style="padding-top: 50px">
                                      <span><a href="{{ asset('img/documentation/logout-success.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="POST /logout - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>  
                                </div>
                              </li>                             

                            </ul>
                          </div>

                          {{-- PUT LIST --}}
                          <div class="sub-judul" id="put-list">
                            <h3>PUT</h3>
                            <p>
                              
                            </p>
                          </div>
                          
                          <div class="accordion-list">
                            <ul>
                              <li>
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-8a" data-target=".multi-collapse-8" aria-expanded="false" aria-controls="accordion-list-8a accordion-list-8b"><span>01</span> /names/{repo_name}/edit <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>                                
                                <div id="accordion-list-8a" class="collapse multi-collapse-8" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>
                                      
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Update a record/repository on database</td>
                                            <td>Yes (Admin only)</td>
                                          </tr>
                                        </tbody>
                                      </table>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "PUT"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Authorization: Bearer {Your Bearer Token}"</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>                                        
                                            <td>--header "Content-Type: application/x-www-form-urlencoded"</td>
                                          </tr>
                                          <tr>
                                            <td>5</td>                                        
                                            <td>--data-urlencode "name= {yourname}"</td>
                                          </tr>
                                          <tr>
                                            <td>6</td>                                        
                                            <td>--data-urlencode "full_name= {yourfull_name}"</td>
                                          </tr>
                                          <tr>
                                            <td>7</td>                                        
                                            <td>--data-urlencode "description= {yourdescription}"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                    <p style="padding-top: 50px">
                                      <span><a href="{{ asset('img/documentation/edit-success.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="PUT /names/{repo_name}/edit - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>
                                    <p style="padding-top: 25px">
                                      <span><a href="{{ asset('img/documentation/edit-fail-unauthenticate.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="PUT /names/{repo_name}/edit - Unauthenticated" style="float: right">Response Fail<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>  
                                </div>
                              </li>                              

                            </ul>
                          </div>    
                          
                          {{-- DELETE LIST --}}
                          <div class="sub-judul" id="delete-list">
                            <h3>DELETE</h3>
                            <p>
                              
                            </p>
                          </div>
                          
                          <div class="accordion-list">
                            <ul>
                              <li>
                                <a data-toggle="collapse" class="collapsed" href="#accordion-list-9a" data-target=".multi-collapse-9" aria-expanded="false" aria-controls="accordion-list-9a accordion-list-9b"><span>01</span> /names/{repo_name}/delete <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>                                
                                <div id="accordion-list-9a" class="collapse multi-collapse-9" data-parent=".accordion-list">
                                    <div>
                                      <p><br></p>
                                      
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="3" style="text-align: center">About Route</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Usage</th>
                                            <th style="width: 10%">Auth Required</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>Delete a record/repository on database</td>
                                            <td>Yes (Admin only)</td>
                                          </tr>
                                        </tbody>
                                      </table>

                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th colspan="2" style="text-align: center">Parameters required</th>
                                          </tr>
                                          <tr>
                                            <th style="width: 10%">No</th>
                                            <th style="width: auto">Parameter</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>                                        
                                            <td>--location</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>                                        
                                            <td>--request "DELETE"</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>                                        
                                            <td>--header "Authorization: Bearer {Your Bearer Token}"</td>
                                          </tr>
                                        </tbody>
                                      </table>                                    
                                    </div>
                                    <p style="padding-top: 50px">
                                      <span><a href="{{ asset('img/documentation/delete-success.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="DELETE /names/{repo_name}/delete - Success" style="float: right">Response Success<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>
                                    <p style="padding-top: 25px">
                                      <span><a href="{{ asset('img/documentation/delete-fail-unauthenticate.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="DELETE /names/{repo_name}/delete - Unauthenticated" style="float: right">Response Fail<i class="bx bx-landscape"></i></a></span>                                    
                                    </p>  
                                </div>
                              </li>                              

                            </ul>
                          </div>                            

                        </div>
                        
                      </div>

                    </div>
                  </section><!-- End API LIST Section --> 
                  

                </div>
                <div class="col-6 col-md-8 col-lg-6 pb-5" style="background-color: rgb(155, 179, 219); color: black">

                  <div class="kosongan">
                    {{-- INI KOSONGAN --}}
                  </div>           
                  
                  <div class="sub-judul" id="get-list">
                    <h3>GET</h3>                    

                    <div class="col-lg-12" id="docs-1b">                        
                        <div id="accordion-list-1b" class="collapse multi-collapse-1" data-parent=".accordion-list"> 
                          <h5>01. /</h5>                         
                          <a data-toggle="collapse" class="collapsed" href="#accordion-list-1b" data-target=".multi-collapse-1" aria-expanded="false" aria-controls="accordion-list-1a accordion-list-1b"> <span class="show-hide">Click me to Show/Hide</span> </a>
                          
                          <div class="keterangan">
                            Example with cURL:
                            <span><a href="#" onclick="CopyToClipboard('curl-get-01');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                          </div>
                          <code>
                            <div class="code-div" id="curl-get-01">                              
                              <p>curl --location --request GET &quot;http://localhost/project-2-primasr/public/api/&quot; ^ &nbsp; &nbsp;</p>
                              <p>--header &quot;Content-Type: application/json&quot;</p>
                              <p><br></p>
                              <p>or</p>
                              <p><br></p>
                              <p>curl -L -X GET &quot;http://localhost/project-2-primasr/public/api/&quot; ^ &nbsp; &nbsp;</p>
                              <p>-H &quot;Content-Type: application/json&quot;</p>
                            </div>                           
                          </code>

                          <hr>

                          <div class="keterangan">
                            Example with PHP:
                            <span><a href="#" onclick="CopyToClipboard('php-get-01');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                          </div>
                          <code>
                            <div class="code-div code-div-php" id="php-get-01">                                
                                <p>&lt;?php</p>
                                <p><br>$client = new http\Client;</p>
                                <p><br>$request = new http\Client\Request;</p>
                                <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/&apos;);</p>
                                <p><br>$request-&gt;setRequestMethod(&apos;GET&apos;);</p>
                                <p><br>$request-&gt;setOptions(array());</p>
                                <p><br>$request-&gt;setHeaders(array(</p>
                                <p><br>&nbsp; &apos;Content-Type&apos; =&gt; &apos;application/json&apos;,</p>
                                <p><br>));</p>
                                <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                                <p><br>$response = $client-&gt;getResponse();</p>
                                <p><br>echo $response-&gt;getBody();</p>
                                <p><br></p>
                            </div>                           
                          </code> 

                        </div>                      
                    </div>                                         

                    <div class="col-lg-12" id="docs-2b">                      
                      <div id="accordion-list-2b" class="collapse multi-collapse-2" data-parent=".accordion-list">                        
                        <h5>02. /all</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-2b" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="accordion-list-2a accordion-list-2b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-02');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div" id="curl-get-02">                              
                              <p>curl --location --request GET &quot;http://localhost/project-2-primasr/public/api/all&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Content-Type: application/json&quot;</p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-02');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-02">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/all&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;GET&apos;);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Content-Type&apos; =&gt; &apos;application/json&apos;,</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>

                    <div class="col-lg-12" id="docs-3b">                      
                      <div id="accordion-list-3b" class="collapse multi-collapse-3" data-parent=".accordion-list">                        
                        <h5>03. /me</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-3b" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="accordion-list-3a accordion-list-3b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-03');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div" id="curl-get-03">                              
                              <p>curl --location --request GET &quot;http://localhost/project-2-primasr/public/api/me&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Content-Type: application/json&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Authorization: Bearer&nbsp;</p>
                              <p>{Your Bearer Token}&quot;</p>
                              <p><br></p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-03');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-03">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/me&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;GET&apos;);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Content-Type&apos; =&gt; &apos;application/json&apos;,</p>
                              <p><br>&nbsp; &apos;Authorization&apos; =&gt; &apos;Bearer {Your Bearer Token}&apos;</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>

                    <div class="col-lg-12" id="docs-4b">                      
                      <div id="accordion-list-4b" class="collapse multi-collapse-4" data-parent=".accordion-list">                        
                        <h5>04. /names/{repo_name}</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-4b" data-target=".multi-collapse-4" aria-expanded="false" aria-controls="accordion-list-4a accordion-list-4b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-04');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div" id="curl-get-04">                              
                              <p>curl --location --request GET &quot;http://localhost/project-2-primasr/public/api/names/gantiganti&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Content-Type: application/json&quot;</p>
                              <p><br></p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-04');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-04">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/names/gantiganti&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;GET&apos;);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Content-Type&apos; =&gt; &apos;application/json&apos;,</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>
                                        
                  </div>

                  <div class="kosongan-2">
                    {{-- INI KOSONGAN --}}
                  </div>

                  <div class="sub-judul" id="post-list">
                    <h3>POST</h3>

                    <div class="col-lg-12" id="docs-5b">                      
                      <div id="accordion-list-5b" class="collapse multi-collapse-5" data-parent=".accordion-list">                        
                        <h5>01. /register</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-5b" data-target=".multi-collapse-5" aria-expanded="false" aria-controls="accordion-list-5a accordion-list-5b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-05');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div" id="curl-get-05">                              
                              <p>curl --location --request POST &quot;http://localhost/project-2-primasr/public/api/register&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Content-Type: application/x-www-form-urlencoded&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;email=useruser@gmail.com&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;password=useruser&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;name=useruser&quot;</p>
                              <p><br></p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-05');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-05">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/register&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;POST&apos;);</p>
                              <p><br>$body = new http\Message\Body;</p>
                              <p><br>$body-&gt;append(new http\QueryString(array(</p>
                              <p><br>&nbsp; &apos;email&apos; =&gt; &apos;useruser@gmail.com&apos;,</p>
                              <p><br>&nbsp; &apos;password&apos; =&gt; &apos;useruser&apos;,</p>
                              <p><br>&nbsp; &apos;name&apos; =&gt; &apos;useruser&apos;)<p></p>));<p><br></p>$request-&gt;setBody($body);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Content-Type&apos; =&gt; &apos;application/x-www-form-urlencoded&apos;,</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>

                    <div class="col-lg-12" id="docs-6b">                      
                      <div id="accordion-list-6b" class="collapse multi-collapse-6" data-parent=".accordion-list">                        
                        <h5>02. /login</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-6b" data-target=".multi-collapse-6" aria-expanded="false" aria-controls="accordion-list-6a accordion-list-6b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-06');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div" id="curl-get-06">                              
                              <p>curl --location --request POST &quot;http://localhost/project-2-primasr/public/api/login&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Content-Type: application/x-www-form-urlencoded&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;email=useruser@gmail.com&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;password=useruser&quot;</p>
                              <p><br></p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-06');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-06">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/login&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;POST&apos;);</p>
                              <p><br>$body = new http\Message\Body;</p>
                              <p><br>$body-&gt;append(new http\QueryString(array(</p>
                              <p><br>&nbsp; &apos;email&apos; =&gt; &apos;useruser@gmail.com&apos;,</p>
                              <p><br>&nbsp; &apos;password&apos; =&gt; &apos;useruser&apos;)<p></p>));<p><br></p>$request-&gt;setBody($body);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Content-Type&apos; =&gt; &apos;application/x-www-form-urlencoded&apos;,</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>
                    
                    <div class="col-lg-12" id="docs-7b">                      
                      <div id="accordion-list-7b" class="collapse multi-collapse-7" data-parent=".accordion-list">                        
                        <h5>03. /logout</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-7b" data-target=".multi-collapse-7" aria-expanded="false" aria-controls="accordion-list-7a accordion-list-7b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-07');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div" id="curl-get-07">                              
                              <p>curl --location --request POST &quot;http://localhost/project-2-primasr/public/api/logout&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Authorization: Bearer {Your Bearer Token}&quot;</p>
                              <p><br></p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-07');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-07">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/logout&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;POST&apos;);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Authorization&apos; =&gt; &apos;Bearer {Your Bearer Token}&apos;,</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>                    

                  </div>

                  <div class="kosongan-3">
                    {{-- INI KOSONGAN --}}
                  </div>

                  <div class="sub-judul" id="put-list">
                    <h3>PUT</h3>



                    <div class="col-lg-12" id="docs-8b">                      
                      <div id="accordion-list-8b" class="collapse multi-collapse-8" data-parent=".accordion-list">                        
                        <h5>01. /names/{repo_name}/edit</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-8b" data-target=".multi-collapse-8" aria-expanded="false" aria-controls="accordion-list-8a accordion-list-8b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-08');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div" id="curl-get-08">                              
                              <p>curl --location --request PUT &quot;http://localhost/project-2-primasr/public/api/names/gantiganti/edit&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Authorization: Bearer {Your Bearer Token}&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Content-Type: application/x-www-form-urlencoded&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;name=gantilagi&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;full_name=primasr/gantilagi&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--data-urlencode &quot;description=gantilagi&quot;</p>
                              <p><br></p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-08');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-08">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/names/gantiganti/edit&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;PUT&apos;);</p>
                              <p><br>$body = new http\Message\Body;</p>
                              <p><br>$body-&gt;append(new http\QueryString(array(</p>
                              <p><br>&nbsp; &apos;name&apos; =&gt; &apos;gantilagi&apos;,</p>
                              <p><br>&nbsp; &apos;full_name&apos; =&gt; &apos;primasr/gantilagi&apos;,</p>
                              <p><br>&nbsp; &apos;description&apos; =&gt; &apos;gantilagi&apos;)</p>
                              <p>));</p>
                              <p>$request-&gt;setBody($body);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Authorization&apos; =&gt; &apos;Bearer {Your Bearer Token}&apos;,</p>
                              <p><br>&nbsp; &apos;Content-Type&apos; =&gt; &apos;application/x-www-form-urlencoded&apos;</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>                    

                  </div>

                  <div class="kosongan-4">
                    {{-- INI KOSONGAN --}}
                  </div>

                  <div class="sub-judul" id="delete-list">
                    <h3>DELETE</h3>



                    <div class="col-lg-12" id="docs-9b">                      
                      <div id="accordion-list-9b" class="collapse multi-collapse-9" data-parent=".accordion-list">                        
                        <h5>01. /names/{repo_name}/delete</h5>
                        <a data-toggle="collapse" class="collapsed" href="#accordion-list-9b" data-target=".multi-collapse-9" aria-expanded="false" aria-controls="accordion-list-9a accordion-list-9b"><span class="show-hide">Click me to Show/Hide</span></a>
                        
                        <div class="keterangan">
                          Example with cURL:
                          <span><a href="#" onclick="CopyToClipboard('curl-get-09');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>                          
                          <div class="code-div" id="curl-get-09">                              
                              <p>curl --location --request DELETE &quot;http://localhost/project-2-primasr/public/api/names/gantilagi/delete&quot; ^ &nbsp; &nbsp;</p>
                              <p><br>--header &quot;Authorization: Bearer {Your Bearer Token}&quot;</p>
                              <p><br></p>
                          </div>                           
                        </code> 
                        
                        <hr>

                        <div class="keterangan">
                          Example with PHP:
                          <span><a href="#" onclick="CopyToClipboard('php-get-09');return false;" class="my-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="bx bx-clipboard bx-sm"></i></a></span>
                        </div>
                        <code>
                          <div class="code-div code-div-php" id="php-get-09">                              
                              <p>&lt;?php</p>
                              <p><br>$client = new http\Client;</p>
                              <p><br>$request = new http\Client\Request;</p>
                              <p><br>$request-&gt;setRequestUrl(&apos;http://localhost/project-2-primasr/public/api/names/gantilagi/delete&apos;);</p>
                              <p><br>$request-&gt;setRequestMethod(&apos;DELETE&apos;);</p>
                              <p><br>$request-&gt;setOptions(array());</p>
                              <p><br>$request-&gt;setHeaders(array(</p>
                              <p><br>&nbsp; &apos;Authorization&apos; =&gt; &apos;Bearer {Your Bearer Token}&apos;</p>
                              <p><br>));</p>
                              <p><br>$client-&gt;enqueue($request)-&gt;send();</p>
                              <p><br>$response = $client-&gt;getResponse();</p>
                              <p><br>echo $response-&gt;getBody();</p>
                              <p><br></p>
                          </div>                           
                        </code> 

                      </div>
                    </div>
                    

                  </div>

                </div>
            </div>
          </div>
        </section>             
    
    </main><!-- End #main -->        
@endsection
