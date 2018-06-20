<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8" />
    <title>ENGAGE v1.1 Creative</title>
    
    <!--Favicon-->
    {{-- <link rel="shortcut icon" type="image/png" href="images/favicons/favicon-16x16.html" sizes="16x16">
    <link rel="shortcut icon" href="images/favicons/favicon-16x16-2.html" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.html"> --}}
    <!--Loader-->
    <link rel="stylesheet" href="{{asset('css/preloader/preloader.css')}}" type="text/css" />
    <!--Framework Styles-->
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" type="text/css" />
    <!--Fonts Styles-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
    <!--Icons Styles-->
    <link rel="stylesheet" href="{{asset('css/icons/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/icons/ionicons.min.css')}}" type="text/css" />
    <!--animation-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <!--Venders Styles-->
    <link rel="stylesheet" href="{{asset('css/owl/owl.carousel.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/cubeportfolio/cubeportfolio.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/nav/navigation-top.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/popup/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animated-headlines/animated-headlines.css')}}" type="text/css" />

    <!--Default Styles-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css" />
    <!-- LESS stylesheet for managing color presets -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/default.css')}}" data-color="" id="theme">

    <!--Responsive Styles-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/styleswitcher.css')}}" type="text/css" />
    <!--HTML5 JS-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="page" data-spy="scroll" data-target=".navbar-nav" data-offset="80" class="appear-animate">

    <!-- Preloader
          ––––––––––––––––––––––––––––––––––––––––––––ff–––––– -->
          <div class="ip-header">
                {{-- <div class="ip-logo"> <img class="preloaderLogo center-block" src="{{asset('images/logo/logo-black.png')}}" alt="preloader"> </div> --}}
                <div class="marT50">
                    <h1 class="marT50">PORTFOLIO</h1>
                </div>
                <div class="ip-loader"> <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                        <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                        <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                        </svg> </div>
            </div>
            <!--/ Preloader-->

    

            <div id="pageWrapper" class="en-portfolio">
                <!-- Content Wrapper
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="contentWrapper">

            @yield('content')
            
                </div>
                <!--/ Content Wrapper-->
            </div>

            {{-- footer --}}
            @include('newlayout.footer')
            {{-- fin footer --}}




       <!-- scripts
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
          <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
          
          <script type="text/javascript" src="{{asset('js/plugins/plugin.js')}}"></script>
          <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
          <script type="text/javascript" src="{{asset('js/styleswitcher.js')}}"></script>
       <script src="{{asset('js/app.js')}}"></script>
          <!--/ scripts-->
      </body>
      
      
      </html>