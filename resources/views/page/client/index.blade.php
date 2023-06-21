@extends('layout.clients.master')

@section('content')
    

<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->

<!-- ======================= Category Style 1 ======================== -->
<section class="p-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
        
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <a href="#" class="card card-overflow card-scale no-radius mb-0">
                <div class="bg-image" style="background:url(assets/img/a-1.png)no-repeat;" data-overlay="2"></div>
                    <div class="ct_body">
                        <div class="ct_body_caption">	
                            <h1 class="mb-0 ft-bold text-light">Mens</h1>
                        </div>
                        <div class="ct_footer">
                            <span class="btn btn-white stretched-link">Shop Mens <i class="lni lni-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <a href="#" class="card card-overflow card-scale no-radius mb-0">
                <div class="bg-image" style="background:url(assets/img/a-2.png)no-repeat;" data-overlay="2"></div>
                    <div class="ct_body">
                        <div class="ct_body_caption">	
                            <h1 class="mb-0 ft-bold text-light">Kids</h1>
                        </div>
                        <div class="ct_footer">
                            <span class="btn btn-white stretched-link">Shop Kids <i class="lni lni-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <a href="#" class="card card-overflow card-scale no-radius mb-0">
                <div class="bg-image" style="background:url(assets/img/a-3.png)no-repeat;" data-overlay="2"></div>
                    <div class="ct_body">
                        <div class="ct_body_caption">	
                            <h1 class="mb-0 ft-bold text-light">Womens</h1>
                        </div>
                        <div class="ct_footer">
                            <span class="btn btn-white stretched-link">Shop Womens <i class="lni lni-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</section>
<!-- ======================= Category Style 1 ======================== -->

<!-- ======================= Product List ======================== -->
<section class="middle">
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Trendy Products</h2>
                    <h3 class="ft-bold pt-3">Our Trending Products</h3>
                </div>
            </div>
        </div>
        
        <!-- row -->
        <div class="row align-items-center rows-products">
        
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/1.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half Running Set</a></h5>
                                <div class="elis_rty"><span class="ft-bold fs-md text-dark">$119.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/2.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Formal Men Lowers</a></h5>
                                <div class="elis_rty"><span class="text-muted ft-medium line-through mr-2">$129.00</span><span class="ft-bold theme-cl fs-md">$79.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/3.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half Running Suit</a></h5>
                                <div class="elis_rty"><span class="ft-bold fs-md text-dark">$80.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-warning text-white position-absolute ft-regular ab-left text-upper">Hot</div>
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/4.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half Fancy Lady Dress</a></h5>
                                <div class="elis_rty"><span class="text-muted ft-medium line-through mr-2">$149.00</span><span class="ft-bold theme-cl fs-md">$110.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/5.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Flix Flox Jeans</a></h5>
                                <div class="elis_rty"><span class="text-muted ft-medium line-through mr-2">$90.00</span><span class="ft-bold theme-cl fs-md">$49.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-danger text-white position-absolute ft-regular ab-left text-upper">Hot</div>
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/6.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Fancy Salwar Suits</a></h5>
                                <div class="elis_rty"><span class="ft-bold fs-md text-dark">$114.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/7.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Collot Full Dress</a></h5>
                                <div class="elis_rty"><span class="ft-bold theme-cl fs-md text-dark">$120.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <button class="btn btn_love position-absolute ab-right snackbar-wishlist"><i class="far fa-heart"></i></button> 
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="assets/img/product/8.jpg" alt="..."></a>
                            <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                <div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footers b-0 pt-3 px-2 bg-white d-flex align-items-start justify-content-center">
                        <div class="text-left">
                            <div class="text-center">
                                <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Formal Fluex Kurti</a></h5>
                                <div class="elis_rty"><span class="text-muted ft-medium line-through mr-2">$149.00</span><span class="ft-bold theme-cl fs-md">$129.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- row -->
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="shop-style-1.html" class="btn stretched-link borders">Explore More<i class="lni lni-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- ======================= Product List ======================== -->

<!-- ======================= Customer Review ======================== -->
<section class="gray">
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Testimonials</h2>
                    <h3 class="ft-bold pt-3">Client Reviews</h3>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                <div class="reviews-slide px-3">
                    
                    <!-- single review -->
                    <div class="single_review">
                        <div class="sng_rev_thumb"><figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt="" /></figure></div>
                        <div class="sng_rev_caption text-center">
                            <div class="rev_desc mb-4">
                                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            </div>
                            <div class="rev_author">
                                <h4 class="mb-0">Mark Jevenue</h4>
                                <span class="fs-sm">CEO of Addle</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- single review -->
                    <div class="single_review">
                        <div class="sng_rev_thumb"><figure><img src="assets/img/team-2.jpg" class="img-fluid circle" alt="" /></figure></div>
                        <div class="sng_rev_caption text-center">
                            <div class="rev_desc mb-4">
                                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            </div>
                            <div class="rev_author">
                                <h4 class="mb-0">Henna Bajaj</h4>
                                <span class="fs-sm">Aqua Founder</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- single review -->
                    <div class="single_review">
                        <div class="sng_rev_thumb"><figure><img src="assets/img/team-3.jpg" class="img-fluid circle" alt="" /></figure></div>
                        <div class="sng_rev_caption text-center">
                            <div class="rev_desc mb-4">
                                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            </div>
                            <div class="rev_author">
                                <h4 class="mb-0">John Cenna</h4>
                                <span class="fs-sm">CEO of Plike</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- single review -->
                    <div class="single_review">
                        <div class="sng_rev_thumb"><figure><img src="assets/img/team-4.jpg" class="img-fluid circle" alt="" /></figure></div>
                        <div class="sng_rev_caption text-center">
                            <div class="rev_desc mb-4">
                                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            </div>
                            <div class="rev_author">
                                <h4 class="mb-0">Madhu Sharma</h4>
                                <span class="fs-sm">Team Manager</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Customer Review ======================== -->

<!-- ======================= Blog Start ============================ -->
<section class="space min">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Latest News</h2>
                    <h3 class="ft-bold pt-3">New Updates</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="blog-detail.html" class="d-block"><img src="assets/img/bl-1.png" class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">26 Jan 2021</span>
                        <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                        <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="blog-detail.html" class="d-block"><img src="assets/img/bl-2.png" class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">17 July 2021</span>
                        <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                        <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="blog-detail.html" class="d-block"><img src="assets/img/bl-3.png" class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">10 Aug 2021</span>
                        <h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                        <a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<!-- ======================= Blog Start ============================ -->

<!-- ======================= Instagram Start ============================ -->
<section class="p-0">
    <div class="container-fluid p-0">
        
        <div class="row no-gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Instagram Gallery</h2>
                    <span class="fs-lg ft-bold theme-cl pt-3">@mahak_71</span>
                    <h3 class="ft-bold lh-1">From Instagram</h3>
                </div>
            </div>
        </div>
        
        <div class="row no-gutters">
            
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-1.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-2.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-3.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-7.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-8.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-4.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-5.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="_insta_wrap">
                    <div class="_insta_thumb">
                        <a href="javascript:void(0);" class="d-block"><img src="assets/img/i-6.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<!-- ======================= Instagram Start ============================ -->

<!-- ======================= Customer Features ======================== -->
<section class="px-0 py-3 br-top">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Free Shipping</h5>
                        <span class="text-muted">Capped at $10 per order</span>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="far fa-credit-card"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Secure Payments</h5>
                        <span class="text-muted">Up to 6 months installments</span>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">15-Days Returns</h5>
                        <span class="text-muted">Shop with fully confidence</span>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <div class="d_ico">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">24x7 Fully Support</h5>
                        <span class="text-muted">Get friendly support</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ======================= Customer Features ======================== -->
@endsection