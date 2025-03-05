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
    <meta property="og:image" content="@yield('ogimage', asset('frontend/images/saiog.jpg'))">
    <meta property="og:site_name" content="Sai Lanka Bliss">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Sai Lanka Bliss | Connect, Love & Cherish Every Moment!')">
    <meta name="twitter:description" content="@yield('meta_description', 'Find meaningful connections with Sai Lanka Bliss, the exclusive dating platform where love begins. Discover, connect, and build lasting relationships with ease.')">
    <meta name="twitter:image" content="@yield('ogimage', asset('frontend/images/saiog.jpg'))">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.svg') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/AnimTrap/css/animtrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
    @vite(['', 'resources/js/app.js'])
</head>

<body>
    <a href="javascript:;" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
    @include('frontend.components.header')
    @yield('content')
    @include('frontend.components.footer')
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/range-slider.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/AnimTrap/js/anim-effect.js') }}"></script>
    <script src="{{ asset('frontend/AnimTrap/js/anim-scroll.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    @stack('scripts')
    <script>
        var tpj = jQuery;
        var revapi1078;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1078_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1078_1");
            } else {
                revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            style: "metis",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [937, 740, 590, 510],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <script>
        // counter js start
        $(document).ready(function($) {
            function isScrolledIntoView(elem) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();
                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();
                return ((elemBottom <= docViewBottom));
            }

            function countUp() {
                $('.counter').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');

                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 8000,
                            easing: 'linear',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
            }
            $(document).scroll(function() {
                if (isScrolledIntoView(".counter")) {
                    countUp();
                }
            });
        });
    </script>

    <script>
        ANIMSCROLL.init({
            easing: 'ease-in-out-sine'
        });
    </script>
</body>

</html>
