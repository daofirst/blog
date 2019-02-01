@extends('layouts.web')

@section('content')
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