@extends('layouts.web')

@section('title', '登录')

@section('content')

    @section('header')
        <div id="header" class="navbar-toggleable-md sticky clearfix">

            <!-- TOP NAV -->
            <header id="topNav">
                <div class="container">

                    <!-- Mobile Menu Button -->
                    <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Logo -->
                    <a class="logo float-left" href="{{ route('home') }}">
                        <img src="assets/images/custom/logo/logo-dark.png" alt="" />
                    </a>

                    <!--
                        Top Nav
                    -->
                    <div class="navbar-collapse collapse float-right nav-main-collapse">
                        <nav class="nav-main">
                            <ul id="topMain" class="nav nav-pills nav-main nav-hover-animate nav-animate-fadeIn">
                                <li class="active"><!-- HOME -->
                                    <a href="#">
                                        首页
                                    </a>
                                </li>
                                <li class="dropdown"><!-- PORTFOLIO -->
                                    <a class="dropdown-toggle" href="#">
                                        作品
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                Laravel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                小程序
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                H5
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=""><!-- ABOUT -->
                                    <a class="" href="#">
                                        关于我
                                    </a>

                                </li>
                                <li><!-- BLOG -->
                                    <a href="{{ url('/blog') }}">
                                        博客
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


    <!-- -->
    <section>
        <div class="container">

            <div class="row">

                <div class="col-md-6 offset-md-3">

                    <div class="box-static box-border-top p-30">
                        <div class="box-title mb-30">
                            <h2 class="fs-20">Login</h2>
                        </div>

                        <form class="m-0" method="post" action="#" autocomplete="off">
                            @csrf
                            <div class="clearfix">

                                <!-- Email -->
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           placeholder="Email" required autofocus value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6 col-sm-6 col-6">

                                    <!-- Inform Tip -->
                                    <div class="form-tip pt-20">
                                        <a class="no-text-decoration fs-13 mt-10 block" href="#">Forgot Password?</a>
                                    </div>

                                </div>

                                <div class="col-md-6 col-sm-6 col-6 text-right">

                                    <button class="btn btn-primary">OK, LOG IN</button>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div class="mt-30 text-center">
                        <a href="page-register-1.html"><strong>Create Account</strong></a>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- / -->

@endsection