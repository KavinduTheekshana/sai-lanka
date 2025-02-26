<div id="header">

    <header class="w-100 float-start">
        <div class="main-header w-100 float-start">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6 p-0">
                        <div class="main-header-logo">
                            <a href="index.html">
                                <img src="{{ asset('frontend/images/sai lanka bilss 2.svg') }}"
                                    class="img-fluid logo-main" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-6 p-0">
                        <div class="main-menu w-100 float-end">
                            <div class="overlay d-block d-lg-none"></div>
                            <ul class="float-end" id="cssmenu">
                                <li class="d-block d-lg-none">
                                    <a href="javascript:;" class="b-none">
                                        <img src="images/logo.png" alt="logo">
                                    </a>
                                </li>
                                <li class="search d-block d-lg-none">
                                    <input type="text" name="search" placeholder="Search....">
                                    <span><i class="fas fa-search"></i></span>
                                </li>
                                <li><a href="{{ route('/') }}">Home</a></li>

                                <li><a href="#">About</a></li>
                                <li><a href="#">Profiles</a></li>

                                <li><a href="{{ route('testimonial') }}">Testimonial</a></li>




                                <li><a href="{{ route('contact') }}">Contact</a></li>

                                <li class="d-block d-lg-none"><a href="login.html">Login / Register</a></li>
                                <li class="d-none d-lg-block">
                                    <a href="javascript:;" class="search-toggle">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <div class="search-dropsown">
                                        <input type="text" name="Search" placeholder="Search....">
                                        <button type="button" onclick="location.href='searchbar.html'"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                    <div class="searchDropClose"></div>
                                </li>


                            </ul>

                            <div class="main-btn float-end d-none d-lg-block">
                                <div class="menuBtn ">
                                    <a href="login.html">Login</a> / <a href="sing-up.html">Register</a>
                                </div>
                            </div>
                            <div class="mobToggle d-flex d-lg-none">
                                <button class="js-toggle-dark-mode" type="button">
                                    <i class="fa fa-sun-o darkSunMode" aria-hidden="true"></i>
                                    <i class="fa fa-moon-o darkMoonMode" aria-hidden="true"></i>
                                </button>
                                <div class="toggle-btn">
                                    <div class="icon-left"></div>
                                    <div class="icon-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shap">
            <img src="{{ asset('frontend/images/banner-shape1.png') }}" alt="banner-shape1" class="img-fluid">
            <img src="{{ asset('frontend/images/banner-shape2.png') }}" alt="banner-shape2" class="img-fluid">
        </div>
        @if (!Request::is('/'))
            <div class="shadow-img"></div>
        @endif
    </header>
</div>
