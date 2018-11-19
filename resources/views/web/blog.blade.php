@extends('layouts.web')

@section('title', '博客')

@section('content')
	<!-- 
		PAGE HEADER 
		
		CLASSES:
			.page-header-xs	= 20px margins
			.page-header-md	= 50px margins
			.page-header-lg	= 80px margins
			.page-header-xlg= 130px margins
			.dark		= dark page header
			.light		= light page header
	-->
	<section class="page-header page-header-md b-0 dark" 
		data-background-delay="5000" 
		data-background-fade="1000" 
		data-background="
            https://xdbpublic.oss-cn-hangzhou.aliyuncs.com/images/cover/727E5041EB17FC903A09225161B0816A.jpg
            ,https://xdbpublic.oss-cn-hangzhou.aliyuncs.com/images/cover/932611432D57207759147D3683EEF80F.jpg
        ">

		<span class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></span>
		<div class="container">

			<small>Hello, 欢迎来到 </small>
			<h1 class="fs-40">唐胖子 <strong>博客</strong></h1>

		</div>
	</section>
	<!-- /PAGE HEADER -->



	<!-- -->
	<section>
		<div class="container">

			<div class="row">

				<!-- LEFT -->
				<div class="col-md-3 col-sm-3">

					<!-- INLINE SEARCH -->
					<div class="inline-search clearfix mb-60 mt-6">
						<form action="" method="get" class="widget_search">
							<input type="search" placeholder="搜索文章..." id="s" name="s" class="serch-input">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
						</form>
					</div>
					<!-- /INLINE SEARCH -->

					<!-- side navigation -->
					<div class="side-nav mb-60 mt-30">

						<div class="side-nav-head">
							<button class="fa fa-bars"></button>
							<h4>文章分类</h4>
						</div>
						<ul class="list-group list-group-bordered list-group-noicon uppercase">
							<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(12)</span> Laravel</a></li>
							<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(8)</span> CentOs</a></li>
							<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(32)</span> Photoshop</a></li>
							<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(16)</span> H5</a></li>
							<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(2)</span> 微信小程序</a></li>
							<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(1)</span> 钉钉</a></li>

						</ul>
						<!-- /side navigation -->

					
					</div>

						

					</div>
					<!-- JUSTIFIED TAB -->

					

				</div>

				<!-- RIGHT -->
				

			</div>


		</div>
	</section>
	<!-- / -->


@endsection