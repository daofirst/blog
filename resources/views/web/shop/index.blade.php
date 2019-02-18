@extends('layouts.web')

@section('title', '唐小店')

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
                                        <div class="caption-container text-left">
                                            <h2>你过新年 <strong>我买单</strong></h2>
                                            <p>
                                                特别的礼给特别的你!
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="img-fluid radius-4" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/banners/top_1.png" width="851" height="335" alt="">
                        </div>
                        <!-- /item -->

                    </div>
                    <!-- /CAROUSEL -->


                    <!-- LIST OPTIONS -->
                    <div class="clearfix shop-list-options mb-20">

                        <ul class="pagination m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>

                        <div class="options-left">
                            <select>
                                <option value="pos_asc">Position ASC</option>
                                <option value="pos_desc">Position DESC</option>
                                <option value="name_asc">Name ASC</option>
                                <option value="name_desc">Name DESC</option>
                                <option value="price_asc">Price ASC</option>
                                <option value="price_desc">Price DESC</option>
                            </select>
                            
                            <a class="btn active fa fa-th" href="shop-4col-left.html"><!-- grid --></a>
                            <a class="btn fa fa-list" href="shop-1col-left.html"><!-- list --></a>
                        </div>

                    </div>
                    <!-- /LIST OPTIONS -->


                    <ul class="shop-item-list row list-inline m-0">

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p13.jpg" alt="shop first image" />
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p14.jpg" alt="shop hover image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- product more info -->
                                    <div class="shop-item-info">
                                        <span class="badge badge-success">NEW</span>
                                        <span class="badge badge-danger">SALE</span>
                                    </div>
                                    <!-- /product more info -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Cotton 100% - Pink Shirt</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        <span class="line-through">$98.00</span>
                                        $78.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p11.jpg" alt="shop hover image" />
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p3.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="2" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="2" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Black Long Lady Shirt</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-0 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $128.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <span class="out-of-stock">out of stock</span><!-- add .clean to remove css characteres -->
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p12.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="3" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="3" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                    
                                    <!-- countdown -->
                                    <div class="shop-item-counter">
                                        <div class="countdown" data-from="January 31, 2020 15:03:26" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
                                    </div>
                                    <!-- /countdown -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Night Dress For Ladies</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-1 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $34.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <!-- CAROUSEL -->
                                        <div class="owl-carousel m-0" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
                                            <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p10.jpg" alt="">
                                            <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p1.jpg" alt="">
                                            <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p14.jpg" alt="">
                                        </div>
                                        <!-- /CAROUSEL -->
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="4" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="4" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- product more info -->
                                    <div class="shop-item-info">
                                        <span class="badge badge-success">NEW</span>
                                    </div>
                                    <!-- /product more info -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Long Grey Dress - Special</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-5 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $76.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p9.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="5" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="5" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->


                                    <!-- product more info -->
                                    <div class="shop-item-info">
                                        <span class="badge badge-danger">SALE</span>
                                    </div>
                                    <!-- /product more info -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Grey Lady Hat</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        <span class="line-through">$67.00</span>
                                        $21.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p8.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="6" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="6" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- countdown -->
                                    <div class="shop-item-counter">
                                        <div class="countdown" data-from="December 31, 2020 08:22:01" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
                                    </div>
                                    <!-- /countdown -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Beach Black Lady Suit</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $56.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p7.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="7" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="7" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Town Dress - Black</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $154.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p6.jpg" alt="shop first image" />
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p14.jpg" alt="shop hover image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="8" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="8" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Chick Lady Fashion</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $167.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <!-- CAROUSEL -->
                                        <div class="owl-carousel buttons-autohide controlls-over m-0" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
                                            <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p5.jpg" alt="">
                                            <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p1.jpg" alt="">
                                        </div>
                                        <!-- /CAROUSEL -->
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="9" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="9" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Pink Dress 100% Cotton</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $44.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p4.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="10" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="10" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>White And Black</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $31.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p11.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="11" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="11" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- countdown -->
                                    <div class="shop-item-counter">
                                        <div class="countdown" data-from="January 12, 2018 12:34:55" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
                                    </div>
                                    <!-- /countdown -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Long Black Top</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        $99.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                    <!-- /buttons -->
                            </div>

                        </li>
                        <!-- /ITEM -->

                        <!-- ITEM -->
                        <li class="col-lg-3">

                            <div class="shop-item">

                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p2.jpg" alt="shop first image" />
                                        <img class="img-fluid" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/blog/public/assets/demo_files/images/shop/products/300x450/p12.jpg" alt="shop hover image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="12" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="12" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->

                                    <!-- product more info -->
                                    <div class="shop-item-info">
                                        <span class="badge badge-success">NEW</span>
                                        <span class="badge badge-danger">SALE</span>
                                    </div>
                                    <!-- /product more info -->
                                </div>
                                
                                <div class="shop-item-summary text-center">
                                    <h2>Black Fashion Hat</h2>
                                    
                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        <span class="line-through">$77.00</span>
                                        $65.00
                                    </div>
                                    <!-- /price -->
                                </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-light" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
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
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
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
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(123)</span> 鞋 &amp; 靴子</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(331)</span> 上衣 &amp; 女短衫</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(234)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">新品</a>
                                <ul>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(88)</span> 饰品</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(67)</span> 鞋 &amp; 靴子</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(32)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(78)</span> 上衣 &amp; 女短衫</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">首饰</a>
                                <ul>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(23)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(34)</span> 鞋 &amp; 靴子</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(21)</span> 上衣 &amp; 女短衫</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(88)</span> 饰品</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">童装</a>
                                <ul>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(88)</span> 鞋 &amp; 靴子</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(22)</span> 连衣裙 &amp; 裙子和连衣裙</a></li>
                                    <li><a href="#"><span class="fs-11 text-muted float-right">(31)</span> 饰品</a></li>
                                    <li class="active"><a href="#"><span class="fs-11 text-muted float-right">(18)</span> 上衣 &amp; 女短衫</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(189)</span> 饰品</a></li>
                            <li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(61)</span> 眼镜</a></li>

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