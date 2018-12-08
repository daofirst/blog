@extends('layouts.web')

@section('title', '博客')

@section('styles')
    <style>
        .el-pagination.is-background .btn-next, .el-pagination.is-background .btn-prev, .el-pagination.is-background .el-pager li {
            min-width: 35px;
            height: 38px;
            line-height: 38px;
        }
    </style>
@endsection

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

            <small>Hello, 欢迎来到</small>
            <h1 class="fs-40">唐胖子 <strong>博客</strong></h1>

        </div>
    </section>
    <!-- /PAGE HEADER -->



    <!-- -->
    <section>
        <div class="container" id="app">

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
                            <li v-for="item in categories" class="list-group-item">
                                <a href="javascript:;">
                                    <span class="fs-11 text-muted float-right">(@{{ item.posts_count }})</span>
                                    @{{ item.name }}
                                </a>
                            </li>

                        </ul>
                        <!-- /side navigation -->


                    </div>


                </div>

                <!-- RIGHT -->
                <div class="col-md-9 col-sm-9">

                    <!-- POST ITEM -->
                    <div v-for="item in posts" class="blog-post-item">


                        <!-- IMAGE -->
                        <figure class="mb-20">
                            <img class="img-fluid" :src="item.image" alt="">
                        </figure>

                        <h2><a href="#">@{{ item.title }}</a></h2>

                        <ul class="blog-post-info list-inline">
                            <li>
                                <a href="#">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="font-lato">@{{ item.created_at }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-comment-o"></i>
                                    <span class="font-lato">0条评论</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-folder-open-o"></i>

                                <a class="category" href="#">
                                    <span class="font-lato">@{{ item.category.name }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span class="font-lato">@{{ item.author }}</span>
                                </a>
                            </li>
                        </ul>

                        <p>@{{ item.excerpt }}</p>

                        <a href="pack-photography-blog-article.html" class="btn btn-reveal btn-default">
                            <i class="fa fa-plus"></i>
                            <span>查看更多</span>
                        </a>

                    </div>
                    <!-- /POST ITEM -->



                    <!-- PAGINATION -->
                    <div class="text-left">
                        <!-- Pagination Default -->
                        <el-pagination
                                background
                                layout="prev, pager, next"
                                :page-size="1"
                                :total="postPaginate.total">
                        </el-pagination>
                        <!-- /Pagination Default -->
                    </div>
                    <!-- /PAGINATION -->

                </div>

            </div>

        </div>


        </div>
    </section>
    <!-- / -->


@endsection

@section('scripts')
    <script type="text/javascript">

        let instance = axios.create({
            baseURL: '/api/',
            timeout: 1000,
            headers: {'Authorization': window.clientToken, 'Accept': 'application/json'}
        });

        let app = new Vue({
            el: '#app',
            data: {
                categories: [],
                posts: [],
                postPaginate: {}
            },

            methods: {
                /**
                 * 获取文章类别
                 */
                getCategories() {
                    let that = this;
                    instance.get('/blog/get_categories')
                        .then(response => {
                            that.categories = response.data.data;
                        });
                },

                /**
                 * 获取文章列表
                 * @param params 筛选参数
                 */
                getPosts(params = {}) {
                    let that = this;
                    instance.get('/blog/get_posts')
                        .then(response => {
                            that.posts = response.data.data;
                            that.postPaginate = response.data.meta;
                        });
                }
            },

            mounted() {
                axios.all([this.getCategories(), this.getPosts()]);
            }
        });
    </script>
@endsection