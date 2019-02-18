<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>唐胖子之家 - @yield('title', '首页')</title>
        <meta name="description" content="唐正元 博客 唐胖子 唐小豆" />
        <meta name="Author" content="唐正元" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- APP CSS -->
        <link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/css/app.css" rel="stylesheet" type="text/css" />

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/css/fonts_googleapis.css" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/css/layout.css" rel="stylesheet" type="text/css" />


        <!-- PAGE LEVEL SCRIPTS -->
        <link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" />
        <link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/css/layout-shop.css" rel="stylesheet" type="text/css" />

        <style>
            section {
                padding: 50px 0;
            }
        </style>

        @yield('styles')
    </head>

    <!--
        AVAILABLE BODY CLASSES:
        
        smoothscroll            = create a browser smooth scroll
        enable-animation        = enable WOW animations
    -->
    <body class="smoothscroll enable-animation">

        <!-- wrapper -->
        <div id="wrapper">

            @section('header')
   
			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.b-0 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent b-0"
			-->
			<div id="header" class="navbar-toggleable-md sticky clearfix">

                    <!-- SEARCH HEADER -->
                    <div class="search-box over-header">
                        <a id="closeSearch" href="#" class="fa fa-remove"></a>
    
                        <form action="" method="get">
                            <input type="text" class="form-control" placeholder="搜索" />
                        </form>
                    </div> 
                    <!-- /SEARCH HEADER -->
    
    
                    <!-- TOP NAV -->
                    <header id="topNav">
                        <div class="container">
    
                            <!-- Mobile Menu Button -->
                            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
    
                            <!-- BUTTONS -->
                            <ul class="float-right nav nav-pills nav-second-main">
    
                                <!-- SEARCH -->
                                <li class="search">
                                    <a href="javascript:;">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <!-- /SEARCH -->
    
                            </ul>
                            <!-- /BUTTONS -->
    
                            <!-- Logo -->
                            <a class="logo float-left" href="index.html">
                                <img src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/logo/logo-dark.png" alt="" />
                            </a>
    
                            <!-- 
                                Top Nav 
                                
                                AVAILABLE CLASSES:
                                submenu-dark = dark sub menu
                            -->
                            <div class="navbar-collapse collapse float-right nav-main-collapse submenu-dark">
                                <nav class="nav-main">
    
                                    <!--
                                        NOTE
                                        
                                        For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                        Direct Link Example: 
    
                                        <li>
                                            <a href="#">HOME</a>
                                        </li>
                                    -->
                                    <ul id="topMain" class="nav nav-pills nav-main">
                                        <li class=""><!-- HOME -->
                                            <a href="{{ url('/home') }}">
                                                首页
                                            </a>
                                        </li>
                                        <li class="active"><!-- ABOUT -->
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
    
            @show


            @yield('content')


            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">

                    <div class="row">
                        
                        <div class="col-md-8">

                            <!-- Footer Logo -->
                            <img height="38" class="footer-logo footer-2" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/logo/logo.png" alt="" />

                            <!-- Small Description -->
                            <p>当你的才华还撑不起你的野心的时候，你就应该静下心来学习；当你的能力还驾驭不了你的目标时，就应该沉下心来，历练；梦想，不是浮躁，而是沉淀和积累。 <i>&ndash; <b>莫言</b> &ndash;</i></p>

                            <hr />

                            <div class="row">
                                <div class="col-md-6 col-sm-6">

                                    <!-- Newsletter Form -->
                                    <p class="mb-10">订阅我的 <strong>文章</strong></p>

                                    <form id="newsletterForm" action="php/newsletter.php" method="post">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" required="required">
                                            <span class="input-group-btn">
                                                <button class="btn btn-info" type="submit">订阅</button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- /Newsletter Form -->
                                </div>

                                <div class="col-md-6 col-sm-6 hidden-xs-down">

                                    <!-- Social Icons -->
                                    <div class="ml-50 clearfix">
                                        <p class="mb-10">关注我</p>

                                        <a href="https://www.linkedin.com/in/tangzhengyuan-3543b1154" target="_brank" class="social-icon social-icon-sm social-icon-transparent social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                            <i class="icon-linkedin"></i>
                                            <i class="icon-linkedin"></i>
                                        </a>

                                    </div>
                                    <!-- /Social Icons -->

                                </div>
                                
                            </div>



                        </div>

                        <div class="col-md-4">

                            <h4 class="letter-spacing-1">联系我</h4>

                            <!-- CONTACT MESSAGES -->
                            <p id="alert_success" class="alert alert-success alert-mini">Message sent! Thank You!</p>
                            <p id="alert_failed" class="alert alert-danger alert-mini">Message not sent!</p>
                            <p id="alert_mandatory" class="alert alert-danger alert-mini">Please, complete all mandatory fields</p>

                            <!-- CONTACT FORM -->
                            <form class="validate" method="post" action="php/contact.php">
                                
                                <input type="text" value="" placeholder="Name*" maxlength="100" class="form-control required" name="contact[name]" />
                                <input type="email" value="" placeholder="Email*" data-msg-email="Please enter a valid email address." class="form-control required" name="contact[email]" />
                                <textarea maxlength="5000" placeholder="Message*" rows="3" style="height:45px;" 
                                class="form-control required" name="contact[message]"></textarea>
                                <input type="submit" value="提交消息" class="btn btn-info" />

                            </form>
                            <!-- /CONTACT FORM -->

                        </div>

                    </div>

                </div>

                <div class="copyright">
                    <div class="container">
                        <ul class="list-inline inline-links mobile-block float-right m-0">
                            <li><a href="pack-photography-home-1.html">Home</a></li>
                            <li><a href="pack-photography-about-us.html">关于我</a></li>
                            <li><a href="pack-photography-category.html">作品</a></li>
                            <li><a href="pack-photography-contact-us.html">博客</a></li>
                        </ul>

                        &copy; All Rights Reserved, Bean Tang
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->


        </div>


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->
        <script>var plugin_path = "https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/plugins/";</script>
        <script src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

        <script src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/js/scripts.js"></script>
        <script src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/js/app.js"></script>

        @yield('scripts')
    </body>
</html>