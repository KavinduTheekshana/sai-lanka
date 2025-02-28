<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sai Lanka Bliss</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Sai Lanka Bliss" />
    <meta name="keywords" content="Sai Lanka Bliss" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" type="image/png" href="images/favicon.png">

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
    @vite(['', 'resources/js/app.js'])
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
