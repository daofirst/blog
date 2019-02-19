@extends('layouts.web')

@section('title', '唐小店')

@section('styles')
    <style>
        div.shop-item>.thumbnail>.shop-item-counter:before {
            content: "限时特惠";
        }
        div.shop-item-summary h2 {
            height: 66px;
        }
    </style>
@endsection

@section('content')
    <!-- -->
    <section>
        <div class="container">
            
            <div class="row">


                <!-- RIGHT -->
                <div class="col-lg-9 col-md-9 order-md-2 order-lg-2">

                    <!-- CAROUSEL -->
                    <div class="owl-carousel buttons-autohide controlls-over mb-30 radius-4" 
                    data-plugin-options='{"singleItem": true, "autoPlay": 6000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
                        <!-- item -->
                        <div>
                            <div class="caption-slider-default">
                                <div class="display-table">
                                    <div class="display-table-cell vertical-align-middle">
                                        <div class="caption-container">
                                            <h2>新春 <strong>特惠</strong> &ndash; 低至5折起</h2>
                                            <p>
                                                生活精致<br />
                                                源于唐小店
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="img-fluid radius-4" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/banners/top_2.png" width="851" height="335" alt="">
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div>

                            <div class="caption-slider-default">
                                <div class="display-table">
                                    <div class="display-table-cell vertical-align-middle">
                                        <div class="caption-container text-right">
                                            <h2>你过新年 <strong>我买单</strong></h2>
                                            <p>
                                                特别的礼给特别的你!
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="img-fluid radius-4" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/shop/top_1.png" width="851" height="335" alt="">
                        </div>
                        <!-- /item -->

                    </div>
                    <!-- /CAROUSEL -->


                    <!-- LIST OPTIONS -->
                    <div class="clearfix shop-list-options mb-20">

                        <ul class="pagination m-0 float-right">
                            <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li> --}}
                            <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>

                        <div class="options-left">
                            <select>
                                <option value="price_asc">价格正序</option>
                                <option value="price_desc">价格倒序</option>
                            </select>
                            
                            <a class="btn active fa fa-th" href="{{ url('/shop') }}"><!-- grid --></a>
                            {{-- <a class="btn fa fa-list" href="shop-1col-left.html"><!-- list --></a> --}}
                        </div>

                    </div>
                    <!-- /LIST OPTIONS -->


                    <ul class="shop-item-list row list-inline m-0">

                        <!-- ITEM -->
                        <li class="col-lg-4">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a target="_blank" class="shop-item-image" href="https://item.jd.com/31500278830.html?jd_pop=d960dc91-7312-4ca3-bdec-e70fe303e544">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/shop/5b726c21N1d67cdf7.jpg!cc_350x449.jpg" alt="shop first image" />
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/shop/5b726c25Ne36bb150.jpg!cc_350x449.jpg" alt="shop hover image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a target="_blank" class="btn btn-light add-wishlist" href="https://item.jd.com/31500278830.html?jd_pop=d960dc91-7312-4ca3-bdec-e70fe303e544" data-item-id="1" data-toggle="tooltip" title="加入愿望清单"><i class="fa fa-heart p-0"></i></a>
                                        <a target="_blank" class="btn btn-light add-compare" href="https://item.jd.com/31500278830.html?jd_pop=d960dc91-7312-4ca3-bdec-e70fe303e544" data-item-id="1" data-toggle="tooltip" title="加入对比单"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- product more info -->
                                    <div class="shop-item-info">
                                        <span class="badge badge-success">新款</span>
                                        <span class="badge badge-danger">闪购折扣</span>
                                    </div>
                                    <!-- /product more info -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>烟花烫2019春装新款女装甜美修身棉麻绣花网纱七分袖中长连衣裙 枫桥醉 灰蓝色 L</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-5 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        <span class="line-through">￥845.00</span>
                                        ￥299.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a target="_blank" class="btn btn-light" href="https://item.jd.com/31500278830.html?jd_pop=d960dc91-7312-4ca3-bdec-e70fe303e544"><i class="fa fa-cart-plus"></i> 添加到购物车</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-4">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a target="_blank" class="shop-item-image" href="https://item.jd.com/37651258073.html?jd_pop=aea2caa8-b65f-4c3f-bc84-74c76fdd0af2">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/commodity/c03a3bad020edfc6.jpg!cc_350x449.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a target="_blank" class="btn btn-light add-wishlist" href="https://item.jd.com/37651258073.html?jd_pop=aea2caa8-b65f-4c3f-bc84-74c76fdd0af2" data-item-id="3" data-toggle="tooltip" title="加入愿望清单"><i class="fa fa-heart p-0"></i></a>
                                        <a target="_blank" class="btn btn-light add-compare" href="https://item.jd.com/37651258073.html?jd_pop=aea2caa8-b65f-4c3f-bc84-74c76fdd0af2" data-item-id="3" data-toggle="tooltip" title="加入对比单"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                    
                                    <!-- countdown -->
                                    <div class="shop-item-counter">
                                        <div class="countdown" data-from="2019-02-20 10:00:00" data-labels="年,月,星期,天,小时,分钟,秒"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
                                    </div>
                                    <!-- /countdown -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>红蜻蜓 毛衣女套装2019春装新款女装宽松针织衫女连衣裙套装T恤女上衣显瘦打底衫女加半身裙 焦糖色 均码</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        ￥226.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a target="_blank" class="btn btn-light" href="https://item.jd.com/37651258073.html?jd_pop=aea2caa8-b65f-4c3f-bc84-74c76fdd0af2"><i class="fa fa-cart-plus"></i> 加入购物车</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-4">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a target="_blank" class="shop-item-image" href="https://item.jd.com/37046449534.html?jd_pop=29a34e27-52ad-41cd-918d-dcd649383a89">
                                        <!-- CAROUSEL -->
                                        <div class="owl-carousel m-0" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
                                            <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/commodity/5bee87fcN62d96d23.jpg!cc_350x449%20(1).jpg" alt="">
                                            <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/images/custom/commodity/5bee87fcNcbadf0db.jpg!cc_350x449%20(1).jpg" alt="">
                                        </div>
                                        <!-- /CAROUSEL -->
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a target="_blank" class="btn btn-light add-wishlist" href="#" data-item-id="4" data-toggle="tooltip" title="加入愿望清单"><i class="fa fa-heart p-0"></i></a>
                                        <a target="_blank" class="btn btn-light add-compare" href="#" data-item-id="4" data-toggle="tooltip" title="加入对比"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- product more info -->
                                    <div class="shop-item-info">
                                        <span class="badge badge-success">新款</span>
                                    </div>
                                    <!-- /product more info -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>IEF/爱依服2018秋冬新款韩版长袖针织衫天鹅绒吊带裙时尚套装女9920F-N5517- 静谧蓝色 均码</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-5 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        ￥226.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a target="_blank" class="btn btn-light" href="https://item.jd.com/37046449534.html?jd_pop=29a34e27-52ad-41cd-918d-dcd649383a89"><i class="fa fa-cart-plus"></i> 加入购物车</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                    </ul>

                    <hr />

                    <!-- Pagination Default -->
                    <div class="text-center">
                        <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li> --}}
                                <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- /Pagination Default -->

                </div>

                <!-- LEFT -->
                <div class="col-lg-3 col-md-3 order-md-1 order-lg-1">

                    <!-- CATEGORIES -->
                    <div class="side-nav mb-60">

                        <div class="side-nav-head">
                            <button class="fa fa-bars"></button>
                            <h4>类别</h4>
                        </div>

                        <ul class="list-group list-group-bordered list-group-noicon uppercase">
                            <li class="list-group-item active">
                                <a class="dropdown-toggle" href="#">女装</a>
                                <ul>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 鞋 &amp; 靴子</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(3)</span> 上衣 &amp; 女短衫</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">新品</a>
                                <ul>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 饰品</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 鞋 &amp; 靴子</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(3)</span> 上衣 &amp; 女短衫</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">首饰</a>
                                <ul>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 鞋 &amp; 靴子</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(3)</span> 上衣 &amp; 女短衫</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 饰品</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">童装</a>
                                <ul>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 鞋 &amp; 靴子</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 饰品</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(3)</span> 上衣 &amp; 女短衫</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 饰品</a></li>
                            <li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(0)</span> 眼镜</a></li>

                        </ul>

                    </div>
                    <!-- /CATEGORIES -->

                    <!-- SIZE -->
                    <div class="mb-60">
                        <h4>尺码</h4>

                        <a class="tag" href="#">
                            <span class="txt">S</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt bold">M</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">L</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">XL</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">2XL</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">3XL</span>
                        </a>
                        
                        <hr />

                        <div class="clearfix fs-12">
                            <a class="float-right fa fa-remove" href="#"></a>
                            选中尺码: <strong>M</strong>
                        </div>
                    </div>
                    <!-- /SIZE -->


                    <!-- COLOR -->
                    <div class="mb-60">
                        <h4>色码</h4>
                        
                        <a class="tag shop-color" href="#" style="background-color:#000000"></a>
                        <a class="tag shop-color" href="#" style="background-color:#FFFFFF"></a>
                        <a class="tag shop-color" href="#" style="background-color:#C0C0C0"></a>
                        <a class="tag shop-color" href="#" style="background-color:#0000E0"></a>
                        <a class="tag shop-color" href="#" style="background-color:#800080"></a>
                        <a class="tag shop-color" href="#" style="background-color:#FF0000"></a>
                        <a class="tag shop-color" href="#" style="background-color:#FF0080"></a>
                        <a class="tag shop-color" href="#" style="background-color:#FF6600"></a>
                        <a class="tag shop-color" href="#" style="background-color:#E0DCC8"></a>
                        <a class="tag shop-color" href="#" style="background-color:#F0E68C"></a>
                        <a class="tag shop-color" href="#" style="background-color:#FFFFD0"></a>
                        <a class="tag shop-color" href="#" style="background-color:#4B0082"></a>
                        <a class="tag shop-color" href="#" style="background-color:#666666"></a>
                        <a class="tag shop-color" href="#" style="background-color:#00FF00"></a>
                        <a class="tag shop-color" href="#" style="background-color:#36454F"></a>
                        <a class="tag shop-color" href="#" style="background-color:#F4A460"></a>
                        <a class="tag shop-color" href="#" style="background-color:#0088CC"></a>
                        <a class="tag shop-color" href="#" style="background-color:#B38B6D"></a>

                        <hr />

                        <div class="clearfix fs-12">
                            <a class="float-right fa fa-remove" href="#"></a>
                            选中色码: <strong>红色</strong>
                        </div>
                    </div>
                    <!-- /COLOR -->

                </div>

            </div>
            
        </div>
    </section>
    <!-- / -->

@endsection

@section('scripts')

@endsection