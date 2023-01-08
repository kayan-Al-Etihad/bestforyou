@extends('layout.front.index')
@section('title')@section('title')
   Home
@endsection
@section('content')
<!-- MAIN -->
<div id="main" class="theme-clearfix" role="document">
    <div class="breadcrumbs theme-clearfix">
        <div class="container">
            <ul class="breadcrumb">
                <li class="active">
                    <span>Home</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid no-margin">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner no-padding">
                <div class="wpb_wrapper">
                    <!-- OWL SLIDER -->
                    <div class="wpb_revslider_element wpb_content_element no-margin">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_revslider_element wpb_content_element">
                                    <div id="main-slider" class="fullwidthbanner-container" style="position:relative; width:100%; height:auto; margin-top:0px; margin-bottom:0px">
                                        <div class="module slideshow no-margin">
                                            @foreach ($setting as $setting)
                                            <div class="item">
                                                <a href="home_style_2_shop_product_default.html"><img src="{{ asset('best/images') }}/{{ $setting->slider_image1 }}" alt="slider1" class="img-responsive" height="559"></a>
                                            </div>
                                            <div class="item">
                                                <a href="home_style_2_shop_product_default.html"><img src="{{ asset('best/images') }}/{{ $setting->slider_image2 }}" alt="slider2" class="img-responsive" height="559"></a>
                                            </div>
                                            <div class="item">
                                                <a href="home_style_2_shop_product_default.html"><img src="{{ asset('best/images') }}/{{ $setting->slider_image3 }}" alt="slider3" class="img-responsive" height="559"></a>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="loadeding"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- OWL LIGHT SLIDER -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin: 50px 0">
            <div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="single post-150 page type-page status-publish hentry">
                    <div class="entry">
                        <div class="entry-content">
                            <div class="entry-content">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_wp_custommenu wpb_content_element">
                                                    <!-- CATEGORIES -->
                                                    <div class="mega-left-title">
                                                        <strong>Categories</strong>
                                                    </div>

                                                    <div class="wrapper_vertical_menu vertical_megamenu">
                                                        <ul id="menu-left-menu" class="nav vertical-megamenu">
                                                            @foreach ($categories as $category)
                                                                <li class=" menu-smartphones-accessories ya-mega-menu level1">
                                                                    <a href="{{ route('front.showCategory', $category->category_slug) }}" class="item-link dropdown-toggle">
                                                                        <span class="have-title">
                                                                            <span class="menu-title">
                                                                                {{ $category->category_name }}</span>
                                                                        </span>
                                                                    </a>

                                                                    {{-- <ul class="dropdown-menu nav-level1 one-column">
                                                                        <li class="dropdown-submenu one-column menu-categories-1">
                                                                            <span class="have-title">
                                                                                <span class="menu-title">Categories 1</span>
                                                                            </span>

                                                                            <ul class="dropdown-sub nav-level2">
                                                                                <li class="menu-camera-camcorders">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Camera & Camcorders</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-cosmetic">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Cosmetic</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-electronic">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Electronic</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-laptop-computer">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Laptop & Computer</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-medical-healthcare">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Medical & Healthcare</span>
                                                                                        </span>
                                                                                    </a href="#">
                                                                                </li>

                                                                                <li class="menu-phasellus-laoreet">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Phasellus laoreet</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-etiam-id-finibus">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Etiam id finibus</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>

                                                                        <li class="dropdown-submenu one-column menu-categories-2">
                                                                            <span class="have-title">
                                                                                <span class="menu-title">Categories 2</span>
                                                                            </span>

                                                                            <ul class="dropdown-sub nav-level2">
                                                                                <li class="menu-camera-camcorders">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Camera & Camcorders</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-cosmetic">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Cosmetic</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-electronic">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Electronic</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-laptop-computer">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Laptop & Computer</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-medical-healthcare">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Medical & Healthcare</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-aliquam-in-risus">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Aliquam in risus</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="menu-scelerisque-odio">
                                                                                    <a href="#">
                                                                                        <span class="have-title">
                                                                                            <span class="menu-title">Scelerisque odio</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>

                                                                        <li class="one-column menu-img-menu">
                                                                            <span>
                                                                                <span class="menu-img">
                                                                                    <img src="images/static-img-ver-item.jpg" alt="Menu Image" width="286" height="515" />
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                    </ul> --}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <!-- END CATEGORIES -->
                                                </div>

                                                <!-- SUBSCRIBE -->
                                                <div class="wpb_text_column wpb_content_element  margin-bottom30">
                                                    <div class="wpb_wrapper">
                                                        <div class="block-subscribe sn-lettter">
                                                            <div class="block-title">
                                                                <strong>newsletter<br></strong>
                                                            </div>

                                                            <div class="block-content">
                                                                <div class="form-subscribe-header">
                                                                    <label for="newsletter">You a Client, large or small, and want to participate in this adventure, please send us an email to support@nik.com </label>
                                                                </div>

                                                                <div class="input-box">
                                                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-7267 mc4wp-form-basic" method="post" data-id="7267" data-name="Default sign-up form">
                                                                        <div class="mc4wp-form-fields">
                                                                            <div class="input-box">
                                                                                <input type="email" name="email" title="Sign up for our newsletter" class="newsletter input-text required-entry validate-email" placeholder="Enter your email address" required="required" />
                                                                            </div>

                                                                            <div class="actions">
                                                                                <input type="submit" value="Subscribe" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="mc4wp-response"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END SUBSCRIBE -->

                                                <!-- LASTEST DEAL -->
                                                <div id="lastDealCountDown" class="sw-woo-container-slider responsive-slider countdown-style2" data-lg="1" data-md="1" data-sm="1" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false" data-circle="false">
                                                    <div class="box-slider-title">
                                                        <h2>
                                                            <span>LATEST DEALS</span>
                                                        </h2>
                                                    </div>

                                                    <div class="slider-wrapper clearfix">
                                                        <!-- Slider Countdown -->
                                                        <div class="resp-slider-container">
                                                            <div class="slider responsive">
                                                                @foreach ($latestDeals as $latestDeals)
                                                                <div class="item item-countdown" id="product-count-down-01">
                                                                    <div class="item-wrap">
                                                                        <div class="item-detail">
                                                                            <div class="item-img products-thumb">
                                                                                <!-- quickview & thumbnail  -->
                                                                                <span class="onsale">Sale!</span>

                                                                                <a href="{{ route('front.show', $latestDeals->product_slug) }}">
                                                                                    <div class="product-thumb-hover">
                                                                                        <img 	width="300" height="300" src="{{ $latestDeals->cover }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""/>
                                                                                        <img 	width="300" height="300" src="{{ $latestDeals->cover }}" class="hover-image back" alt="" />
                                                                                    </div>
                                                                                </a>

                                                                                <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                            </div>

                                                                            <div class="item-content">
                                                                                <div class="product-countdown-style1" data-date="1527724800000" data-price="$87" data-starttime="1461888000" data-cdtime="1527724800" data-id="product-count-down-01"></div>



                                                                                <h4>
                                                                                    <a href="{{ route('front.show', $latestDeals->product_slug) }}" title="{{ $latestDeals->product_name }}">{{ $latestDeals->product_name }}</a>
                                                                                </h4>

                                                                                <!-- price -->
                                                                                <div class="item-price">
                                                                                    <del>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{ $latestDeals->price }}
                                                                                        </span>
                                                                                    </del>

                                                                                    <ins>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{ $latestDeals->price }}
                                                                                        </span>
                                                                                    </ins>
                                                                                </div>
                                                                                <!-- price -->
                                                                                <div class="add-info">
                                                                                    <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END LASTEST DEAL -->

                                                <div class="wpb_single_image wpb_content_element vc_align_center margin-bottom-30">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img width="270" height="225" src="{{ asset('best/images/left-image-static.jpg') }}" class="vc_single_image-img attachment-full" alt="" />
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9 vc_col-xs-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="sw-woo-tab" id="sw_woo_tab_01">
                                                    <div class="resp-tab" style="position:relative;">
                                                        <div class="category-slider-content clearfix">
                                                            <div class="category-slider-content clearfix">
                                                                <div class="top-tab-slider clearfix">
                                                                    <h2 style="margin-top: 5px">Best Selling Products</h2>

                                                                    <div class="tab-content clearfix">
                                                                        <!-- Product tab slider -->
                                                                        <div class="tab-pane active" id="bestsales_402">
                                                                            <div id="bestsales_category_id_car-accessories2" class="woo-tab-container-slider responsive-slider clearfix" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                                                                <div class="resp-slider-container">
                                                                                    <div class="row">
                                                                                        <div class="slider responsive">
                                                                                            <!-- ITEMS -->
                                                                                            @foreach ($bestSeller as $product)
                                                                                            <div class="item">
                                                                                                <div class="item-wrap">
                                                                                                    <div class="item-detail">
                                                                                                        <div class="item-img products-thumb">

                                                                                                            <a href="{{ route('front.show', $product->product_slug) }}">
                                                                                                                <div class="product-thumb-hover">
                                                                                                                    <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J10"
                                                                                                                            src="{{ asset('images/') }}/{{ $product->cover }}" />
                                                                                                                </div>
                                                                                                            </a>

                                                                                                            <a onclick="onCahnge('{{ $product->product_name }}', '{{ $product->cover }}', '{{ $product->description }}')"  href="{{ asset('best/ajax/fancybox/example.html') }}" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                                                        </div>

                                                                                                        <div class="item-content">

                                                                                                            <h4>
                                                                                                                <a href="{{ route('front.show', $product->product_slug) }}" title="{{ $product->product_name }}">{{ $product->product_name }}</a>
                                                                                                            </h4>

                                                                                                            <div class="item-price">
                                                                                                                <span>

                                                                                                                    <ins>
                                                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}
                                                                                                                        </span>
                                                                                                                    </ins>
                                                                                                                </span>
                                                                                                            </div>

                                                                                                            <!-- add to cart, wishlist, compare -->
                                                                                                            <div class="add-info">
                                                                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                            <!-- END ITEMS -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                       <!-- End product tab slider -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- IMAGES CONTENT -->
                                                <div class="wpb_text_column wpb_content_element  margin-bottom-18">
                                                    <div class="wpb_wrapper">
                                                        <div class="content-home-img-v2">
                                                            <div class="img-effect img-content-homev2">
                                                                <a class="img-class sn-1" href="">
                                                                    <img src="{{ asset('best/images/imgv2-1.jpg') }}" alt="img" width="385" height="240" />
                                                                    <br>
                                                                </a>
                                                            </div>

                                                            <div class=" img-content-homev2">
                                                                <div class="img-effect img-content-homev2-1">
                                                                    <a class="img-class sn-2" href="">
                                                                        <img src="{{ asset('best/images/imgv2-2.jpg') }}" alt="img" width="476" height="135" />
                                                                    </a>
                                                                </div>

                                                                <div class="img-effect img-content-homev2-2">
                                                                    <a class="img-class sn-3" href="">
                                                                        <img src="{{ asset('best/images/imgv2-3.jpg') }}" alt="img" width="476" height="95" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END IMAGES CONTENT -->

                                                <!-- SPECIAL PRODUCTS -->
                                                <div class="sw-woo-tab-cat loading" id="sw_woo_tab_1">
                                                    <div class="resp-tab" style="position:relative;">
                                                        <div class="top-tab-slider clearfix">
                                                            <div class="order-title">
                                                                <span>SPECIAL PRODUCTS</span>
                                                            </div>

                                                            <button class="navbar-toggle collapsed pull-right" type="button" data-toggle="collapse" data-target="#nav_tabs_res_01" aria-expanded="false">
                                                                <span class="sr-only">Toggle navigation</span>
                                                                <span class="fa fa-bar"></span>
                                                                <span class="fa fa-bar"></span>
                                                                <span class="fa fa-bar"></span>
                                                            </button>
                                                        </div>

                                                        <div class="tab-content" style="margin-top: 40px">
                                                            <div class="tab-pane active" id="featured_category_40">
                                                                <div id="featured_category_id_40" class="woo-tab-container-slider responsive-slider clearfix" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                                                    <div class="resp-slider-container">
                                                                        <div class="row">
                                                                            <div class="slider responsive">
                                                                                @foreach ($specialProducts as $product)
                                                                                <div class="item">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div class="item-img products-thumb">

                                                                                                <a href="{{ route('front.show', $product->product_slug) }}">
                                                                                                    <div class="product-thumb-hover">
                                                                                                        <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J10"
                                                                                                                src="{{ $product->cover }}"/>
                                                                                                    </div>
                                                                                                </a>

                                                                                                <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                                            </div>

                                                                                            <div class="item-content">
                                                                                                <h4>
                                                                                                    <a href="{{ route('front.show', $product->product_slug) }}" title="{{ $product->product_name }}">{{ $product->product_name }}</a>
                                                                                                </h4>

                                                                                                <div class="item-price">
                                                                                                    <span>
                                                                                                        <ins>
                                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                                <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}
                                                                                                            </span>
                                                                                                        </ins>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div class="add-info">
                                                                                                    <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div class="item-img products-thumb">

                                                                                                <a href="{{ route('front.show', $product->product_slug) }}">
                                                                                                    <div class="product-thumb-hover">
                                                                                                        <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="J10"
                                                                                                                src="{{ $product->cover }}"/>
                                                                                                    </div>
                                                                                                </a>

                                                                                                <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                                            </div>

                                                                                            <div class="item-content">
                                                                                                <h4>
                                                                                                    <a href="{{ route('front.show', $product->product_slug) }}" title="{{ $product->product_name }}">{{ $product->product_name }}</a>
                                                                                                </h4>

                                                                                                <div class="item-price">
                                                                                                    <span>
                                                                                                        <ins>
                                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                                <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}
                                                                                                            </span>
                                                                                                        </ins>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div class="add-info">
                                                                                                    <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END SPECIAL PRODUCTS -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_row-full-width vc_clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN -->
@endsection
