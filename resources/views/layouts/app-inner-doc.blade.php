<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    
    {{-- <title>{{ config('app.name') }}</title> --}}
    <title>@yield('title')</title>

    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    {{-- Include bootstrap CSS CDN here --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">         --}}

    <!-- Favicons -->
    <link href="{{ asset('Arsha/assets/img/Logo.png') }}" rel="icon">
    <link href="{{ asset('Arsha/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Arsha/assets/css/style.css') }}" rel="stylesheet">

        <style>
            html {
                min-height: 100vh;
            }
            #header {
                transition: all 0.5s;
                z-index: 997;
                padding: 15px 0;
                background: rgba(40, 58, 90, 0.9);
            }
            code {
                font-family: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
                color: #0b2a62;
                /* background-color: #f1f1f1; */
                /* padding: 2px; */
                font-size: 87.5%;
                line-height: 5px;
            }
            .code-div {
                background-color: #f3f5fa;                 
                white-space: nowrap; 
                overflow-x: scroll;
                overflow-y: hidden;
                padding: 20px;
            }
            .color-li {
                color: black;
            }
            .sub-judul {
                padding-top: 30px;
            }
            .my-clipboard {
                /* float: right;   */
                position: absolute;  
                right: 30px;   
                color: blue;         
            }
            .keterangan {
                padding-top: 20px;
                padding-bottom: 12px;
            }
            .code-div-php {
                color: #ff006c;
            }
            /* h5 {
                font-weight: inherit;
            } */
            .kosongan {
                padding-bottom: 433ex;
            }
            .kosongan-2 {
                padding-bottom: 45ex;
            }
            .kosongan-3 {
                padding-bottom: 36ex;
            }
            .kosongan-4 {
                padding-bottom: 18ex;
            }
            .show-hide {
                color: black;
                font-weight: bold;
                font-style: italic;
                font-size: 12px;
            }
            q {
                font-style: italic;
            }
        </style>
</head>
<body class="d-flex flex-column" style="min-height: 100vh">   
    
    <header id="header" class="fixed-top ">
        @include('layouts.header-doc')
    </header>    

    <div style="flex-grow: 1">
      @yield('content')  
    </div>

    <footer id="footer"> 
        @include('layouts.footer')
    </footer>

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <script>
        function CopyToClipboard(id)
        {
        var r = document.createRange();
            r.selectNode(document.getElementById(id));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
        }       
    </script>
    
</body>

    {{-- Include bootstrap JS CDN here  --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('Arsha/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Arsha/assets/js/main.js') }}"></script>

</html>