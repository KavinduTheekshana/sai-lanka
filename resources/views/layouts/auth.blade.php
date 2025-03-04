<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', "Sai Lanka Bliss | Connect, Love & Cherish Every Moment!")</title>
    <meta name="description" content="@yield('meta_description', 'Find meaningful connections with Sai Lanka Bliss, the exclusive dating platform where love begins. Discover, connect, and build lasting relationships with ease.')">
    <meta name="keywords" content="@yield('meta_keywords', 'dating site, Sri Lanka dating, online dating, find love, meaningful connections, Sai Lanka Bliss, matchmaking, relationship, meet singles, secure dating platform')">

    <meta name="title" content="@yield('title', 'Sai Lanka Bliss | Connect, Love & Cherish Every Moment!')">
    <link rel="canonical" href="https://sailankabliss.com" />
    <meta name="author" content="www.sailankabliss.com">

    <meta property="og:title" content="@yield('title', 'Sai Lanka Bliss | Connect, Love & Cherish Every Moment!')" />
    <meta property="og:description" content="@yield('meta_description', 'Find meaningful connections with Sai Lanka Bliss, the exclusive dating platform where love begins. Discover, connect, and build lasting relationships with ease.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sailankabliss.com">
    <meta property="og:image" content="@yield('ogimage', asset('frontend/images/sai lanka bilss.jpg'))">
    <meta property="og:site_name" content="Sai Lanka Bliss">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Sai Lanka Bliss | Connect, Love & Cherish Every Moment!')">
    <meta name="twitter:description" content="@yield('meta_description', 'Find meaningful connections with Sai Lanka Bliss, the exclusive dating platform where love begins. Discover, connect, and build lasting relationships with ease.')">
    <meta name="twitter:image" content="@yield('ogimage', asset('frontend/images/sai lanka bilss.jpg'))">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.svg') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
    {{-- @vite(['', 'resources/js/app.js']) --}}
</head>

<body>
    <div class="main-singin-box">
        <div class="leftside">
            <div class="air-balloon one">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon two">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon three">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon foure">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
        </div>

        @yield('content')

        <div class="rightside">
            <div class="air-balloon one">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon two">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon three">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
            <div class="air-balloon foure">
                <img src="{{ asset('frontend/images/404-balloon.png') }}" alt="404-balloon">
            </div>
        </div>
    </div>


    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/range-slider.js') }}"></script>
    <script src="{{ asset('frontend/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script>
        $(window).on("load resize", function() {
            windowHeight = $(window).height();
            $(".main-singin-box").css({
                "height": windowHeight
            });
        });
    </script>
</body>

</html>
