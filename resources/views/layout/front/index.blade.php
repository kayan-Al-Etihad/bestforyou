<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="msapplication-TileImage" content="icons/cropped-favicon-270x270.png" />

	<!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icons/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icons/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icons/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="icons/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="icons/favicon.png" />

	<!-- GOOGLE WEB FONTS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,400,500,700,900&ver=1.0.0" type="text/css" media="all" />
	<!-- BOOTSTRAP 3.3.7 CSS -->
    <link rel="stylesheet" href="{{ asset('best/css/theme/bootstrap.min.css') }}">
	<!-- OPEN LIBS CSS -->
    <link rel="stylesheet" href="{{ asset('best/css/theme/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/js_composer/js_composer.min.css') }}">
	<!-- YT CSS -->
    <link rel="stylesheet" href="{{ asset('best/css/colorbox/colorbox.css') }}">
    <link rel="stylesheet" src="{{ asset('best/css/sw_core/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/sw_woocommerce/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/woocommerce/woocommerce-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/woocommerce/woocommerce-smallscreen.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/woocommerce/woocommerce.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/theme/wishtlist.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/theme/app-responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/theme/flexslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/theme/custom-orange-cyan2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/theme/home-style-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('best/css/theme/app-orange-cyan2.min.css') }}" id="theme">
    <link rel="stylesheet" href="{{ asset('best/css/theme/app-orange-cyan2.min.css') }}">
    <link rel="stylesheet" href="/best/css/theme/app-orange-cyan2.min.css">
    <style>
        @media screen and (max-width:900px){
            .navbar-toggle{
                display: block !important;
            }
        }
        @media screen and (max-width:800px){
        #primary-menu .top-links-action{
            margin-left: 80px;
            color: #fff !important;
        }

        .lang_sel_sel.icl-en{
            color: #fff;
        }
        }
    </style>
    @if(app()->getLocale() == 'ar')
    <style>
        .slick-prev{
            left: 0px !important;
        }
        .slick-next{
            left: 40px !important;
        }
        .sn-img:before{
            position: absolute !important;
            top: 0 !important;
            left: 97% !important;
        }

    </style>
    @endif
</head>
<body id="body_wrapper" class="page-template-page-home vc_responsive">

	<div class="body-wrapper theme-clearfix">
        @if(app()->getLocale() == 'ar')
		<!-- HEADER -->
		<div id="yt_header" class="yt-header wrap">
			<div class="header-style2">
				<div class="yt-header-top">
					<div class="container">
						<div class="row">

							<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 logo-wrapper pull-right">
								<!-- LOGO -->
								<div class="logo-wrapperv2">
									<h1>
										<a href="home_style_2.html">
											<img src="{{ asset('best/images/logo_v2.png') }}" alt="sw shoppy" width="140" height="57">
										</a>
									</h1>
								</div>
								<!-- END LOGO -->
							</div>
							<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 pull-left">
								<!-- END INFORMATION -->
								<!-- HEADER MENU -->
								<div class="yt-header-middle" style="position: relative; z-index: 30; top: 0px; left: 0px; right: 0px;">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 yt-megamenu">
											<div class="yt-header-under">
												<nav id="primary-menu" class="primary-menu" style="float: right">

                                                    <!-- LANGUAGE -->
                                                    <div class="col-lg-6 col-md-6 text-left col-sm-12 col-xs-12 top-links-action" style="display:flex;width:110px !important;margin-top: 8px;">
                                                        <div class="block-action-header language-switcher pull-right">
                                                            <div class="textwidget">
                                                                <div id="lang_sel">
                                                                    <ul class="nav">
                                                                        <li>
                                                                            @if(app()->getLocale() == 'ar')
                                                                            <a style="cursor: pointer" class="lang_sel_sel icl-en">
                                                                                <img class="iclflag" title="Arabic" alt="ar" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;AR
                                                                            </a>
                                                                            @else
                                                                            <a style="cursor: pointer" class="lang_sel_sel icl-en">
                                                                                <img class="iclflag" title="English" alt="en" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;ENG
                                                                            </a>
                                                                            @endif
                                                                            <ul>
                                                                                <li class="icl-ar">
                                                                                    @if(app()->getLocale() == 'ar')
                                                                                    <a class="btn btn-default lv1" href="/lang/en">
                                                                                        <img class="iclflag" title="English" alt="en" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;EN
                                                                                    </a>
                                                                                    @else
                                                                                    <a class="btn btn-default lv1" href="/lang/ar">
                                                                                        <img class="iclflag" title="Arabic" alt="ar" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;AR
                                                                                    </a>
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END LANGUAGE -->

                                                    </div>
													<div class="yt-menu">
														<div class="navbar-inner navbar-inverse">
															<div class="resmenu-container">

																<div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
																	<ul id="menu-primary-menu" class="flytheme_resmenu">
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('home') }}">@lang('auth.nan_link_home')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="/products">@lang('auth.nan_link_shop')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('front.categories') }}">@lang('auth.nan_link_categories')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('about.index') }}">@lang('auth.nan_link_about')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('contact.index') }}">@lang('auth.nan_link_contact_us')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('franchise.index') }}">@lang('auth.nan_link_franchise')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('join-us.index') }}">@lang('auth.nan_link_join_us')</a>
																		</li>


																	</ul>
																</div>

																<!-- LIST MOBILE MENU ITEMS -->
																<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuprimary_menu">
																	<span class="sr-only">Categories</span>
																	<span class="icon-bar"></span>
																	<span class="icon-bar"></span>
																	<span class="icon-bar"></span>
																</button>
																<!-- END LIST MOBILE MENU ITEMS -->
															</div>

															<!-- LIST NORMAL MENU ITEMS -->
															<ul id="menu-primary-menu-1" class="nav nav-pills nav-mega flytheme-menures">
																{{-- <li class="style3 dropdown menu-daily-deals ya-mega-menu level1">
																	<a href="#" class="item-link dropdown-toggle">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_daily_deals')</span>
																		</span>
																	</a>

																	<ul class="dropdown-menu nav-level1 four-column ">
																		<li class="four-column menu-product-tab">
																			<div class="listing-tab-shortcode">
																				<div class="tabbable tabs">
																					<ul class="nav nav-tabs">
                                                                                        @foreach ($categories->take(9) as $category)
																						<li class="active">
																							<a href="#listing_category_0{{ $category->category_id }}" data-toggle="tabs">{{ $category->category_name }}</a>
																						</li>
                                                                                        @endforeach
																					</ul>

																					<div class="tab-content">

                                                                                        @foreach ($categories as $category)
                                                                                        <div id="listing_category_0{{ $category->category_id }}" class="tab-pane clearfix active">
																							@foreach ($category->products->take(3) as $products)
                                                                                            <div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="{{ route('front.show',$products->product_slug) }}">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" src="{{ $products->cover }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12"
																															src="{{ $products->cover }}"/>
																													<img 	width="300" height="300" class="hover-image back"
																															src="{{ $products->cover }}" alt="11">
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="{{ route('front.show',$products->product_slug) }}" title="{{ $products->product_name }}">{{ $products->product_name }}</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>{{ $products->price }}
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
                                                                                            @endforeach
																						</div>
                                                                                        @endforeach
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</li> --}}
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('join-us.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_join_us')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('franchise.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_franchise')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('contact.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_contact_us')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('about.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_about')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('front.categories') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.categories')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="/products" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_shop')</span>
																		</span>
																	</a>
																</li>
																<li class="menu-portfolios ya-menu-custom level1">
																	<a href="{{ route('home') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_home')</span>
																		</span>
																	</a>
																</li>

															</ul>
														</div>
													</div>
												</nav>




											</div>
										</div>
									</div>
								</div>
								<!-- END HEADER MENU -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END HEADER -->
        @else
        <!-- HEADER -->
		<div id="yt_header" class="yt-header wrap">
			<div class="header-style2">
				<div class="yt-header-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 pull-right">
								<!-- END INFORMATION -->
								<!-- HEADER MENU -->
								<div class="yt-header-middle" style="position: relative; z-index: 30; top: 0px; left: 0px; right: 0px;">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 yt-megamenu">
											<div class="yt-header-under">
												<nav id="primary-menu" class="primary-menu">
													<div class="yt-menu">
														<div class="navbar-inner navbar-inverse">
															<div class="resmenu-container">
																<!-- LIST MOBILE MENU ITEMS -->
																<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuprimary_menu">
																	<span class="sr-only">Categories</span>
																	<span class="icon-bar"></span>
																	<span class="icon-bar"></span>
																	<span class="icon-bar"></span>
																</button>

																<div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
																	<ul id="menu-primary-menu" class="flytheme_resmenu">
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('home') }}">@lang('auth.nan_link_home')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="/products">@lang('auth.nan_link_shop')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('front.categories') }}">@lang('auth.nan_link_categories')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('about.index') }}">@lang('auth.nan_link_about')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('contact.index') }}">@lang('auth.nan_link_contact_us')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('franchise.index') }}">@lang('auth.nan_link_franchise')</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="{{ route('join-us.index') }}">@lang('auth.nan_link_join_us')</a>
																		</li>


																	</ul>
																</div>
																<!-- END LIST MOBILE MENU ITEMS -->
															</div>

															<!-- LIST NORMAL MENU ITEMS -->
															<ul id="menu-primary-menu-1" class="nav nav-pills nav-mega flytheme-menures">
																<li class="menu-portfolios ya-menu-custom level1">
																	<a href="{{ route('home') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_home')</span>
																		</span>
																	</a>
																</li>

																<li class=" menu-shop ya-mega-menu level1">
																	<a href="/products" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_shop')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('front.categories') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.categories')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('about.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_about')</span>
																		</span>
																	</a>
																</li>


																{{-- <li class="style3 dropdown menu-daily-deals ya-mega-menu level1">
																	<a href="#" class="item-link dropdown-toggle">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_daily_deals')</span>
																		</span>
																	</a>

																	<ul class="dropdown-menu nav-level1 four-column ">
																		<li class="four-column menu-product-tab">
																			<div class="listing-tab-shortcode">
																				<div class="tabbable tabs">
																					<ul class="nav nav-tabs">
                                                                                        @foreach ($categories->take(9) as $category)
																						<li class="active">
																							<a href="#listing_category_0{{ $category->category_id }}" data-toggle="tabs">{{ $category->category_name }}</a>
																						</li>
                                                                                        @endforeach
																					</ul>

																					<div class="tab-content">

                                                                                        @foreach ($categories as $category)
                                                                                        <div id="listing_category_0{{ $category->category_id }}" class="tab-pane clearfix active">
																							@foreach ($category->products->take(3) as $products)
                                                                                            <div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="{{ route('front.show',$products->product_slug) }}">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" src="{{ $products->cover }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12"
																															src="{{ $products->cover }}"/>
																													<img 	width="300" height="300" class="hover-image back"
																															src="{{ $products->cover }}" alt="11">
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="{{ route('front.show',$products->product_slug) }}" title="{{ $products->product_name }}">{{ $products->product_name }}</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>{{ $products->price }}
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
                                                                                            @endforeach
																						</div>
                                                                                        @endforeach
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</li> --}}
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('contact.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_contact_us')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('franchise.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_franchise')</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="{{ route('join-us.index') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">@lang('auth.nan_link_join_us')</span>
																		</span>
																	</a>
																</li>

															</ul>
														</div>
													</div>
                                                    <!-- LANGUAGE -->
                                                    <div class="col-lg-6 col-md-6 text-left col-sm-12 col-xs-12 top-links-action" style="display:flex;width:110px !important;margin-top: 8px;">
                                                        <div class="block-action-header language-switcher pull-right">
                                                            <div class="textwidget">
                                                                <div id="lang_sel">
                                                                    <ul class="nav">
                                                                        <li>
                                                                            @if(app()->getLocale() == 'ar')
                                                                            <a style="cursor: pointer" class="lang_sel_sel icl-en">
                                                                                <img class="iclflag" title="Arabic" alt="ar" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;AR
                                                                            </a>
                                                                            @else
                                                                            <a style="cursor: pointer" class="lang_sel_sel icl-en">
                                                                                <img class="iclflag" title="English" alt="en" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;ENG
                                                                            </a>
                                                                            @endif
                                                                            <ul>
                                                                                <li class="icl-ar">
                                                                                    @if(app()->getLocale() == 'ar')
                                                                                    <a class="btn btn-default lv1" href="/lang/en">
                                                                                        <img class="iclflag" title="English" alt="en" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;EN
                                                                                    </a>
                                                                                    @else
                                                                                    <a class="btn btn-default lv1" href="/lang/ar">
                                                                                        <img class="iclflag" title="Arabic" alt="ar" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;AR
                                                                                    </a>
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END LANGUAGE -->

                                                    </div>
												</nav>




											</div>
										</div>
									</div>
								</div>
								<!-- END HEADER MENU -->

							</div>

							<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 logo-wrapper pull-left">
								<!-- LOGO -->
								<div class="logo-wrapperv2">
									<h1>
										<a href="home_style_2.html">
											<img src="{{ asset('best/images/logo_v2.png') }}" alt="sw shoppy" width="140" height="57">
										</a>
									</h1>
								</div>
								<!-- END LOGO -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END HEADER -->
        @endif
        @yield('content')

		<!-- FOOTER -->
		<div id="yt_footer" class="yt-footer wrap">
			<div class="yt-footer-wrap-style2">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="footer2">
									<div class="footer-title">
										<h2>footer:style2</h2>
									</div>

									<div id="sw_partner_footer" class="responsive-slider sw-partner-container-slider clearfix" data-lg="6" data-md="4" data-sm="3" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="true">
										<div class="title-home">
											<h2>footer:style2</h2>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-middle">
					<div class="container" style="display: flex;justify-content:center;gap:80px;align-items:center">
                        <div class="footer-title">
                            <h2>Contact Us</h2>
                        </div>
						<div class="">
							<div class="footer-border">

								<div class="textwidget">
									<div class="content-block-footer">
										<ul>
											<li>
												<span class="fa fa-map-marker" style="font-size: 16px; position: relative; top: 1px;">&nbsp;</span>No 304, Sky Tower, New York, USA
											</li>

											<li>
												<span class="fa fa-phone" style="font-size: 18px; position: relative; top: 4px;">&nbsp;</span>Telephone:
												<a title="Call:(801) 2345 - 6789" href="tel:+84123456789">(801) 2345 - 6789</a>
											</li>

											<li>
												<span class="fa fa-envelope-o" style="font-size: 11px; position: relative;">&nbsp;</span>E-mail:
												<a title="Contact@gmail.com" href="mailto:Contact@gmail.com">Contact@gmail.com</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="">
							<div class="footer-border">

								<div class="textwidget">
									<div class="content-block-footer">
                                        <ul>
											<li>
												<span class="fa fa-facebook" style="font-size: 16px; position: relative; top: 1px;">&nbsp;</span>Facebook
												<a title="Contact@gmail.com" href="mailto:Contact@gmail.com">Facebook</a>
											</li>

											<li>
												<span class="fa fa-instagram" style="font-size: 18px; position: relative; top: 4px;">&nbsp;</span>
												<a title="Contact@gmail.com" href="mailto:Contact@gmail.com">Instagram</a>
											</li>

											<li>
												<span class="fa fa-twitter" style="font-size: 11px; position: relative;">&nbsp;</span>
												<a title="Contact@gmail.com" href="mailto:Contact@gmail.com">Twitter</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- FOOTER TAGS -->
				<div class="footer-bottom-tag">

					<!-- FOOTER BOTTOM -->
					<div class="footer-bottom">
						<div class="footer-bottom-content container clearfix">
							<div class="copyright-footer text-center">
                                copy right&#169;BestForYou | made by Kayan Al-Etihad

							</div>
						</div>
					</div>
				</div>
				<!--end: FOOTER TAGS -->
			</div>
			<!-- end : footer wrap-->
		</div>
		<!-- END FOOTER -->
        <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="d-flex" style="display: flex;align-items:center;gap:10px">
            <div class="img">
                <img id="qv-img" width="400" height="400" src="" alt="">
            </div>
            <div>
                <h3 class="product_title"></h3>
                <p class="quick-desc"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	</div>
	<a id="ya-totop" href="#" style="display: none;"></a>

    <script src="{{ asset('best/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('best/js/jquery-migrate-1.4.1.min.js') }}"></script>
    <script src="{{ asset('best/js/modernizr-2.6.2.min.js') }}"></script>

	<!-- BOOTSTRAP 3.3.7 JS -->
    <script src="{{ asset('best/js/bootstrap/bootstrap.min.js') }}"></script>

	<!-- OPEN LIBS JS -->
    <script src="{{ asset('best/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('best/js/js.cookie.min.js') }}"></script>
    <script src="{{ asset('best/js/sw_woocommerce/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('best/js/mouse.min.js') }}"></script>
	<script type="text/javascript" src="js/slider.min.js"></script>
    <script src="{{ asset('best/js/slider.min.js') }}"></script>
	<!-- PLUGINS JS-->
    <script src="{{ asset('best/js/colorbox/jquery.colorbox-min.js') }}"></script>
	<script type="text/javascript" src="js/sw_core/jquery.fancybox.pack.js"></script>
    <script src="{{ asset('best/js/sw_core/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('best/js/sw_woocommerce/category-ajax.min.js') }}"></script>
    <script src="{{ asset('best/js/sw_woocommerce/slick.min.js') }}"></script>

	<!-- THEME JS -->
    <script src="{{ asset('best/js/main.min.js') }}"></script>
    <script src="{{ asset('best/js/megamenu.min.js') }}"></script>
    <script src="{{ asset('best/js/pathLoader.min.js') }}"></script>

	<!-- CUSTOM JS -->
	<script type="text/javascript">
		(function($){jQuery('.phone-icon-search').on('click',function(){jQuery('.sm-serachbox-pro').toggle("slide")});var sticky_navigation_offset=$(".yt-header-middle").offset();var sticky_navigation_offset_top=sticky_navigation_offset.top;var sticky_navigation=function(){var scroll_top=$(window).scrollTop();if(scroll_top>sticky_navigation_offset_top){$(".yt-header-middle").addClass("sticky-menu");$(".yt-header-middle").css({"position":"fixed","top":0,"left":0,"right":0,"z-index":800})}else{$(".yt-header-middle").removeClass("sticky-menu");$(".yt-header-middle").css({"position":"relative","z-index":30})}};sticky_navigation();$(window).scroll(function(){sticky_navigation()});$(document).ready(function(){$(".show-dropdown").each(function(){$(this).on("click",function(){$(this).toggleClass("show");$(this).parent().find("> ul").toggle(300)})})})}(jQuery))
	</script>
    <script>
        function onCahnge(name , image , description) {
           console.log(name);
           console.log(image);
           console.log(description);
           const model = document.getElementById('exampleModalCenter');
           let modelName = model.querySelector("h3.product_title");
           modelName.textContent = name;
           console.log(modelName);
           let modelDescription = model.querySelector("p.quick-desc");
           console.log(modelDescription);
           modelDescription.innerHTML = description;
           const qvImage = document.getElementById("qv-img");
           console.log(qvImage);
           function subStr(string, character, position) {
            if(position=='b')
            return string.substring(string.indexOf(character) + 1);
            else if(position=='a')
            return string.substring(0, string.indexOf(character));
            else
            return string;
        }
        path = subStr(image, 's','b');
        console.log(path);
        qvImage.src = "{{ asset('images') }}" + '/' + path;
        console.log(qvImage);
    }

   </script>


</body>

</html>

