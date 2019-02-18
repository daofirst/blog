@extends('layouts.web')

@section('content')

    @section('header')
        
        <!-- 
            AVAILABLE HEADER CLASSES

            Default nav height: 96px
            .header-md      = 70px nav height
            .header-sm      = 60px nav height

            .b-0        = remove bottom border (only with transparent use)
            .sticky         = sticky header
            .static         = static header
            .dark           = dark header
            .bottom         = header on bottom
            
            shadow-before-1 = shadow 1 header top
            shadow-after-1  = shadow 1 header bottom
            shadow-before-2 = shadow 2 header top
            shadow-after-2  = shadow 2 header bottom
            shadow-before-3 = shadow 3 header top
            shadow-after-3  = shadow 3 header bottom

            .clearfix       = required for mobile menu, do not remove!
        -->
        <div id="header" class="navbar-toggleable-md clearfix header-md transparent sticky b-0 disable-uppercase shadow-after-3">

            <!-- TOP NAV -->
            <header id="topNav">
                <div class="container">

                    <!-- Mobile Menu Button -->
                    <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Logo -->
                    <a class="logo float-left" href="{{ route('home') }}">
                        <img src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/logo/logo.png" alt="" />
                        <img src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/logo/logo-dark.png" alt="" />
                    </a>


                    <!-- 
                        Top Nav 
                    -->
                    <div class="navbar-collapse collapse float-right nav-main-collapse">
                        <nav class="nav-main">

                            <!--
                                NOTE
                                
                                For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                Direct Link Example: 

                                <li>
                                    <a href="#">HOME</a>
                                </li>

                                + MENU EFFECTS
                                    .nav-animate-fadeIn
                                    .nav-animate-fadeInUp
                                    .nav-animate-bounceIn
                                    .nav-animate-bounceInUp
                                    .nav-animate-flipInX
                                    .nav-animate-flipInY
                                    .nav-animate-zoomIn
                                    .nav-animate-slideInUp

                                    .nav-hover-animate  = animate text on hover

                            -->
                            <ul id="topMain" class="nav nav-pills nav-main nav-hover-animate nav-animate-fadeIn">
                                <li class="active"><!-- HOME -->
                                    <a href="#">
                                        首页
                                    </a>
                                </li>
                                <li class=""><!-- ABOUT -->
                                    <a class="" href="{{ url('/shop') }}">
                                        商城
                                    </a>
                                    
                                </li>
                                <li><!-- BLOG -->
                                    <a href="{{ url('blog') }}">
                                        博客
                                    </a>
                                </li>
                                <li class=""><!-- ABOUT -->
                                    <a class="" href="#">
                                        关于我
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </div>

                </div>
            </header>
            <!-- /Top Nav -->

        </div>
            
    @endsection

    <!-- 
        + OPTIONS
            .fullheight
            .halfheight
            .thirdheight
            .mobile-fullheight

            ++++++++++++ SIMPLE BG IMAGE|SLIDESHOW +++++++++++
            data-background="demo/images/bg_1.jpg"
            
                * NOTE:     For a slideshow background: add multiple images separated by comma. 
                * EXAMPLE:  data-background="demo/images/bg_1.jpg, demo/images/bg_2.jpg, etc"
            data-background-delay="3000"    = delay between images in ms. Default: 3000 if not used!
            data-background-fade="750"      = fade effect duration in ms. Default:  750 if not used!
            ++++++++++++++++++++++++++++++++++++++++++++++++++
    -->
    <section 
        id="slider" 
        class="fullheight mobile-fullheight m-0 b-0" 
        data-background-delay="5000" 
        data-background-fade="1000" 
        data-background="
            https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/cover/paul-morris-167780-min.jpg
            ,https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/cover/gary-bendig-185238-min.jpg
            ,https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/cover/jay-dantinne-199087-min.jpg
        ">

        <div class="display-table">
            <div class="display-table-cell vertical-align-middle">
                
                <div class="container text-center">
                    <h1 class="m-0 fs-50 fw-300 wow fadeInUp" data-wow-delay="0.4s">唐胖子 <b class="fw-600">之家</b></h1>
                    <p class="lead font-lato fs-30 wow fadeInUp" data-wow-delay="0.7s">因为专注，所以出彩。</p>
                </div>

            </div>
        </div>

        <span class="overlay dark-2"><!-- dark overlay [0 to 9 opacity] --></span>

    </section>
    <!-- -->

@endsection