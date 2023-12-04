<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>RSIHM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('favicon.html')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/nivoSlider/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/flexslider.css')}}">

    <script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>

    <style>
        @media print {
            .noPrintShow {
                display: none !important;
                visibility: hidden;
            }

            .printShow {
                border: 2px solid #c2c2c2;
                padding-top: 10px;
                padding-right: 15px;
                width: 100% !important;
                margin-top: 140px
            }

            @page {
                size: landscape
            }

            .header,
            .hide {
                visibility: hidden
            }
        }
    </style>
</head>

<body class="home-page">
    <!-- Header -->
    @include('Layout.header')        
    @include('Layout.nav')
        <!-- All Components -->
        @yield('content')
        <!-- All Components -->        
    <!-- Footer -->
    @include('Layout.footer')
    <!-- Footer -->

    <!-- Scripts -->
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{asset('js/back-to-top.js')}}"></script>
    <script src="{{asset('js/jquery.placeholder.js')}}"></script>
    <script src="{{asset('js/jflickrfeed/jflickrfeed.min.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.scrollbox.min.js')}}"></script>
    <script src="{{asset('js/jquery.nivo.slider.js')}}"></script>

</body>
<script>
    $(window).load(function () {
        $('#slider').nivoSlider();
    });

    $(function () {
        $(window).bind('scroll', function () {
            var navHeight = $(".header").height();
            ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
        });
        //===============================		
        /*
         * Content Slider
        */
        $('#content-slider').scrollbox({
            direction: 'h',
            distance: 134
        });
        $('#slider-backward').click(function () {
            $('#content-slider').trigger('backward');
        });
        $('#slider-forward').click(function () {
            $('#content-slider').trigger('forward');
        });
        //===============================


        //========Active nav bar===========  
        var url = window.location;
        // Will only work if string in href matches with location
        $('ul.nav li a[href="' + url + '"]').parent().addClass('active');

        // Will also work for relative and absolute hrefs
        $('li.dropdown ul.dropdown-menu a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');

    });
</script>

</html>