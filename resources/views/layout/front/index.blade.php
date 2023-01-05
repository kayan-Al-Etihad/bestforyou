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
</head>
<body id="body_wrapper" class="page-template-page-home vc_responsive">

	<div class="body-wrapper theme-clearfix">
		<!-- HEADER -->
		<div id="yt_header" class="yt-header wrap">
			<div class="header-style2">
				<div class="yt-header-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 pull-right">
								<!-- INFORMATION -->
								<div class="yt-header-topv2">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sl-header-text">
											<div class="offer-wrapper">
												<div class="offer-header">
													<ul id="offer-info">
														<li>
															<i class="sp-ic fa fa-phone-square">&nbsp;</i>Telephone: <a title="0123 456 7891" href="#">0123 456 7891</a>
														</li>

														<li>
															<i class="sp-ic fa fa-envelope">&nbsp;</i>E-mail: <a title="Contact@domain.com" href="mailto:Contact@domain.com">Contact@domain.com</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<!-- LANGUAGE -->
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 top-links-action">
											<div class="block-action-header language-switcher pull-right">
												<div class="textwidget">
													<div id="lang_sel">
														<ul class="nav">
															<li>
																<a class="lang_sel_sel icl-en" href="#">
																	<img class="iclflag" title="English" alt="en" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;ENG
																</a>
																<ul>
																	<li class="icl-en active">
																		<a>
																			<img class="iclflag" title="English" alt="en" src="{{ asset('best/images/en.png') }}" width="18" height="12">&nbsp;ENG
																		</a>
																	</li>

																	<li class="icl-ar">
																		<a>
																			<img class="iclflag" title="Arabic" alt="ar" src="{{ asset('best/images/ar.png') }}" width="18" height="12">&nbsp;ARA
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- END LANGUAGE -->

											<!-- CURRENCY -->
											<div class="block-action-header block-currency pull-right">
												<ul class="currency_w">
													<li>
														<a href="#" >USD</a>
														<ul class="currency_switcher">
															<li>
																<a href="#" class="reset default active" data-currencycode="USD">USD</a>
															</li>
															<li>
																<a href="#"  data-currencycode="EUR">EUR</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<!-- END CURRENCY -->

										</div>
									</div>
								</div>
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
																		<li class="active res-dropdown menu-blog">
																			<a class="item-link dropdown-toggle" href="#">Home</a>
																			<span class="show-dropdown"></span>

																			<ul class="dropdown-resmenu">
																				<li class="res-dropdown menu-blog-layouts">
																					<a class="item-link dropdown-toggle" href="{{ route('home') }}">Home</a>
																				</li>
																			</ul>
																		</li>

																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="#">Shop</a>
																		</li>
																		<li class="res-dropdown menu-shop">
																			<a class="item-link dropdown-toggle" href="#">About</a>
																		</li>

																		<li class="style3 res-dropdown menu-daily-deals">
																			<a class="item-link dropdown-toggle" href="#">Daily Deals</a>
																			<span class="show-dropdown"></span>

																			<ul class="dropdown-resmenu">
																				<li class="menu-product-tab">
																					<a href="home_style_2_shop_product_default.html">Product tab</a>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</div>
																<!-- END LIST MOBILE MENU ITEMS -->
															</div>

															<!-- LIST NORMAL MENU ITEMS -->
															<ul id="menu-primary-menu-1" class="nav nav-pills nav-mega flytheme-menures">
																<li class="active menu-portfolios ya-menu-custom level1">
																	<a href="{{ route('home') }}" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">Home</span>
																		</span>
																	</a>
																</li>

																<li class=" menu-shop ya-mega-menu level1">
																	<a href="/products" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">Shop</span>
																		</span>
																	</a>
																</li>
																<li class=" menu-shop ya-mega-menu level1">
																	<a href="/about" class="item-link">
																		<span class="have-title">
																			<span class="menu-title">About</span>
																		</span>
																	</a>
																</li>

																<li class="style3 dropdown menu-daily-deals ya-mega-menu level1">
																	<a href="#" class="item-link dropdown-toggle">
																		<span class="have-title">
																			<span class="menu-title">Daily Deals</span>
																		</span>
																	</a>

																	<ul class="dropdown-menu nav-level1 four-column ">
																		<li class="four-column menu-product-tab">
																			<div class="listing-tab-shortcode">
																				<div class="tabbable tabs">
																					<ul class="nav nav-tabs">
																						<li class="active">
																							<a href="#listing_category_01" data-toggle="tabs">Apparel & Accessories</a>
																						</li>

																						<li class="">
																							<a href="#listing_category_02" data-toggle="tabs">Basketballs</a>
																						</li>

																						<li class="">
																							<a href="#listing_category_03" data-toggle="tabs">Memory Cards</a>
																						</li>

																						<li class="">
																							<a href="#listing_category_04" data-toggle="tabs">Drivers</a>
																						</li>

																						<li class="">
																							<a href="#listing_category_05" data-toggle="tabs">Golf</a>
																						</li>

																						<li class="">
																							<a href="#listing_category_06" data-toggle="tabs">Samsung</a>
																						</li>

																						<li class="">
																							<a href="#listing_category_07" data-toggle="tabs">Jiteme catem</a>
																						</li>

																						<li class="">
																							<a href="#listing_category_08" data-toggle="tabs">Fashion</a>
																						</li>
																					</ul>

																					<div class="tab-content">
																						<div id="listing_category_01" class="tab-pane clearfix active">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" src="images/12-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12"
																															src="images/12-300x300.jpg"
																															srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back"
																															src="images/111-300x300.jpg" alt="11"
																															srcset="images/111-300x300.jpg 300w, images/111-260x260.jpg 260w, images/111.jpg 600w, images/111-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Dolore turkey">Dolore turkey</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>440.00
																														</span>
																													</del>
																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>400.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																												<a href="home_style_2_shop_product_default.html">
																													<div class="product-thumb-hover">
																														<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="9"
																																src="images/9-300x300.jpg"
																																srcset="images/9-300x300.jpg 300w, images/9-260x260.jpg 260w, images/9.jpg 600w, images/9-180x180.jpg 180w"
																																sizes="(max-width: 300px) 100vw, 300px" />
																														<img 	width="300" height="300" class="hover-image back" alt="12"
																																src="images/12-300x300.jpg"
																																srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w"
																																sizes="(max-width: 300px) 100vw, 300px" />
																													</div>
																												</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:56px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Jowl ullamco">Jowl ullamco</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>77.00
																														</span>
																													</del>

																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>60.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:56px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Sint drumstick">Sint drumstick</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>55.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<div id="listing_category_02" class="tab-pane clearfix ">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:56px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Sint drumstick">Sint drumstick</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>55.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="19"
																															src="images/19-300x300.jpg"
																															srcset="images/19-300x300.jpg 300w, images/19-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="28_1"
																															src="images/28_1-300x300.jpg"
																															srcset="images/28_1-300x300.jpg 300w, images/28_1-260x260.jpg 260w, images/28_1.jpg 600w, images/28_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="External/Affiliate product">External/Affiliate product</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>180.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12"
																															src="images/12-300x300.jpg"
																															srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="12"
																															src="images/12-300x300.jpg"
																															srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Huma saren mazem kae">Huma saren mazem kae</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>4.99
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<div id="listing_category_03" class="tab-pane clearfix">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																												<a href="home_style_2_shop_product_default.html">
																													<div class="product-thumb-hover">
																														<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="9"
																																src="images/9-300x300.jpg"
																																srcset="images/9-300x300.jpg 300w, images/9-260x260.jpg 260w, images/9.jpg 600w, images/9-180x180.jpg 180w"
																																sizes="(max-width: 300px) 100vw, 300px" />
																														<img 	width="300" height="300" class="hover-image back" alt="12"
																																src="images/12-300x300.jpg"
																																srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w"
																																sizes="(max-width: 300px) 100vw, 300px" />
																													</div>
																												</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:56px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Jowl ullamco">Jowl ullamco</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>77.00
																														</span>
																													</del>
																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>60.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:56px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Sint drumstick">Sint drumstick</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>55.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="4"
																															src="images/4-300x300.jpg"
																															srcset="images/4-300x300.jpg 300w, images/4-260x260.jpg 260w, images/4.jpg 600w, images/4-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Aliqua minim">Aliqua minim</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>880.00
																														</span>
																													</del>

																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>800.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<div id="listing_category_04" class="tab-pane clearfix ">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="30_1"
																															src="images/30_1-300x300.jpg"
																															srcset="images/30_1-300x300.jpg 300w, images/30_1-260x260.jpg 260w, images/30_1.jpg 600w, images/30_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="28_1"
																															src="images/28_1-300x300.jpg"
																															srcset="images/28_1-300x300.jpg 300w, images/28_1-260x260.jpg 260w, images/28_1.jpg 600w, images/28_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Umas tika lorem narem">Umas tika lorem narem</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>545.00
																														</span>
																													</del>

																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>345.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="31"
																															src="images/31-300x300.jpg"
																															srcset="images/31-300x300.jpg 300w, images/31-260x260.jpg 260w, images/31.jpg 600w, images/31-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="31"
																															src="images/31-300x300.jpg"
																															srcset="images/31-300x300.jpg 300w, images/31-260x260.jpg 260w, images/31.jpg 600w, images/31-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Euismod leo diam nazem">Euismod leo diam nazem</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>510.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<div id="listing_category_05" class="tab-pane clearfix ">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="23_1"
																															src="images/23_1-300x300.jpg"
																															srcset="images/23_1-300x300.jpg 300w, images/23_1-260x260.jpg 260w, images/23_1.jpg 600w, images/23_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="23_1"
																															src="images/23_1-300x300.jpg"
																															srcset="images/23_1-300x300.jpg 300w, images/23_1-260x260.jpg 260w, images/23_1.jpg 600w, images/23_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content"><span style="width:0px"></span></div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Wiru mise kaztem">Wiru mise kaztem</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>1.99
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="6_5"
																															src="images/6_5-300x300.jpg"
																															srcset="images/6_5-300x300.jpg 300w, images/6_5-260x260.jpg 260w, images/6_5.jpg 600w, images/6_5-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="6_5"
																															src="images/6_5-300x300.jpg"
																															srcset="images/6_5-300x300.jpg 300w, images/6_5-260x260.jpg 260w, images/6_5.jpg 600w, images/6_5-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:70px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Rika mire pisan">Rika mire pisan</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>0.99
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<div id="listing_category_06" class="tab-pane clearfix ">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="12"
																															src="images/12-300x300.jpg"
																															srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img	width="300" height="300" class="hover-image back" alt="11"
																															src="images/111-300x300.jpg"
																															srcset="images/111-300x300.jpg 300w, images/111-260x260.jpg 260w, images/111.jpg 600w, images/111-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Dolore turkey">Dolore turkey</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>440.00
																														</span>
																													</del>
																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>400.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																												<a href="home_style_2_shop_product_default.html">
																													<div class="product-thumb-hover">
																														<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="9"
																																src="images/9-300x300.jpg"
																																srcset="images/9-300x300.jpg 300w, images/9-260x260.jpg 260w, images/9.jpg 600w, images/9-180x180.jpg 180w"
																																sizes="(max-width: 300px) 100vw, 300px" />
																														<img 	width="300" height="300" class="hover-image back" alt="12"
																																src="images/12-300x300.jpg"
																																srcset="images/12-300x300.jpg 300w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-180x180.jpg 180w"
																																sizes="(max-width: 300px) 100vw, 300px" />
																													</div>
																												</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:56px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Jowl ullamco">Jowl ullamco</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>77.00
																														</span>
																													</del>

																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>60.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="5"
																															src="images/51-300x300.jpg"
																															srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:56px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Sint drumstick">Sint drumstick</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>55.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<div id="listing_category_07" class="tab-pane clearfix ">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="30_1"
																															src="images/30_1-300x300.jpg"
																															srcset="images/30_1-300x300.jpg 300w, images/30_1-260x260.jpg 260w, images/30_1.jpg 600w, images/30_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="28_1"
																															src="images/28_1-300x300.jpg"
																															srcset="images/28_1-300x300.jpg 300w, images/28_1-260x260.jpg 260w, images/28_1.jpg 600w, images/28_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Umas tika lorem narem">Umas tika lorem narem</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>545.00
																														</span>
																													</del>

																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>345.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="17"
																															src="images/17-300x300.jpg"
																															srcset="images/17-300x300.jpg 300w, images/17-260x260.jpg 260w, images/17.jpg 600w, images/17-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="13_1"
																															src="images/13_1-300x300.jpg"
																															srcset="images/13_1-300x300.jpg 300w, images/13_1-260x260.jpg 260w, images/13_1.jpg 600w, images/13_1-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Morbi vulputate diam">Morbi vulputate diam</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>560.00
																														</span>
																													</del>

																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>520.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<div id="listing_category_08" class="tab-pane clearfix ">
																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<span class="onsale">Sale!</span>
																											<a href="home_style_2_shop_product_default.html">
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="1"
																															src="images/1-2-300x300.jpg"
																															srcset="images/1-2-300x300.jpg 300w, images/1-2-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="1"
																															src="images/1-2-300x300.jpg"
																															srcset="images/1-2-300x300.jpg 300w, images/1-2-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Nulla in diam">Nulla in diam</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<del>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>345.00
																														</span>
																													</del>

																													<ins>
																														<span class="woocommerce-Price-amount amount">
																															<span class="woocommerce-Price-currencySymbol">$</span>235.00
																														</span>
																													</ins>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a>
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="2"
																															src="images/2-2-300x300.jpg"
																															srcset="images/2-2-300x300.jpg 300w, images/2-2-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="2"
																															src="images/2-2-300x300.jpg"
																															srcset="images/2-2-300x300.jpg 300w, images/2-2-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Praesent metus elit">Praesent metus elit</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>280.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																							<div class="item">
																								<div class="item-wrap">
																									<div class="item-detail">
																										<div class="item-img products-thumb">
																											<a>
																												<div class="product-thumb-hover">
																													<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="2"
																															src="images/2-2-300x300.jpg"
																															srcset="images/2-2-300x300.jpg 300w, images/2-2-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																													<img 	width="300" height="300" class="hover-image back" alt="2"
																															src="images/2-2-300x300.jpg"
																															srcset="images/2-2-300x300.jpg 300w, images/2-2-180x180.jpg 180w"
																															sizes="(max-width: 300px) 100vw, 300px" />
																												</div>
																											</a>
																										</div>

																										<div class="item-content">
																											<div class="reviews-content">
																												<span style="width:0px"></span>
																											</div>

																											<h4>
																												<a href="home_style_2_shop_product_default.html" title="Praesent metus elit">Praesent metus elit</a>
																											</h4>

																											<div class="item-price">
																												<span>
																													<span class="woocommerce-Price-amount amount">
																														<span class="woocommerce-Price-currencySymbol">$</span>280.00
																													</span>
																												</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</nav>

												<!-- HEADER CATEGORIES SEARCH -->
												<div class="yt-searchpro">
													<a class="btn-search-mobilev2 phone-icon-search icon-search" title="Search">
														<i class="fa fa-search"></i>
													</a>

													<div id="sm_serachbox_pro" class="sm-serachbox-pro">
														<div class="sm-searbox-content">
															<form method="get" id="searchform_special">
																<div class="form-search">
																	<div class="cat-wrapper">
																		<div class="selector" id="uniform-cat">
																			<label class="label-search">
																				<select name="search_category" class="s1_option">
																					<option>All Categories</option>
																					@foreach ($categories as $category)
                                                                                    <option>{{ $category->category_name }}</option>
                                                                                    @endforeach
																				</select>
																			</label>
																		</div>
																	</div>

																	<div class="input-search">
																		<input type="text" value="" placeholder="Search for products" />
																	</div>

																	<button type="submit" title="Search" class="fa fa-search button-search-pro form-button"></button>
																</div>
															</form>
														</div>
													</div>
												</div>
												<!-- END HEADER CATEGORIES SEARCH -->

												<!-- SHOPPING CART -->
												<div class="mini-cart-header">
													<div class="top-form top-form-minicart minicart-product-style pull-right">
														<div class="top-minicart pull-right">
															<a class="cart-contents" href="#" title="View your shopping cart">
																<span class="minicart-number">0</span> item -
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol">$</span>0.00
																</span>
															</a>
														</div>
													</div>
												</div>
												<!-- END SHOPPING CART -->
											</div>
										</div>
									</div>
								</div>
								<!-- END HEADER MENU -->

								<!-- REGISTER_LOGIN DIALOG -->
								<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog block-popup-login">
										<a href="javascript:void(0)" title="Close" class="close close-login" data-dismiss="modal">Close</a>

										<div class="tt_popup_login">
											<strong>Sign in Or Register</strong>
										</div>

										<form class="login">
											<div class="block-content" style="height: 238px;">
												<div class="col-reg registered-account">
													<div class="email-input">
														<input type="text" class="form-control input-text username" name="username" id="username" placeholder="Username" />
													</div>

													<div class="pass-input">
														<input class="form-control input-text password" type="password" placeholder="Password" name="password" id="password" />
													</div>

													<div class="ft-link-p">
														<a href="home_style_2_lost_pass.html" title="Forgot your password">Forgot your password?</a>
													</div>

													<div class="actions">
														<div class="submit-login">
															<input type="submit" class="button btn-submit-login" name="login" value="Login" />
														</div>
													</div>
												</div>

												<div class="col-reg login-customer">
													<h2>NEW HERE?</h2>
													<p class="note-reg">Registration is free and easy!</p>

													<ul class="list-log">
														<li>Faster checkout</li>

														<li>Save multiple shipping addresses</li>

														<li>View and track orders and more</li>
													</ul>
													<a href="home_style_2_create_acc.html" title="Register" class="btn-reg-popup">Create an account</a>
												</div>

												<div class="clear"></div>
											</div>
										</form>

										<div class="clear"></div>
									</div>
								</div>
								<!-- END REGISTER_LOGIN DIALOG -->
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
					<div class="container">
						<div class="footer-column">
							<div class="footer-border">
								<div class="footer-title">
									<h2>My Account</h2>
								</div>

								<ul id="menu-my-account-footer" class="menu">
									<li class="menu-sitemap ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Sitemap</span>
											</span>
										</a>
									</li>

									<li class="menu-privacy-policy ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Privacy Policy</span>
											</span>
										</a>
									</li>

									<li class="menu-your-account ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Your Account</span>
											</span>
										</a>
									</li>

									<li class="menu-advanced-search ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Advanced Search</span>
											</span>
										</a>
									</li>

									<li class="menu-contact-us ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Contact Us</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="footer-column">
							<div class="footer-border">
								<div class="footer-title">
									<h2>Information</h2>
								</div>

								<ul id="menu-information" class="menu">
									<li class="menu-my-account ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">My Account</span>
											</span>
										</a>
									</li>

									<li class="menu-order-history ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Order History</span>
											</span>
										</a>
									</li>

									<li class="menu-returns ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Returns</span>
											</span>
										</a>
									</li>

									<li class="menu-specials ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Specials</span>
											</span>
										</a>
									</li>

									<li class="menu-site-map ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Site Map</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="footer-column">
							<div class="footer-border">
								<div class="footer-title">
									<h2>Corporation</h2>
								</div>

								<ul id="menu-corporation" class="menu">
									<li class="menu-about-us ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">About us</span>
											</span>
										</a>
									</li>

									<li class="menu-customer-service ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Customer Service</span>
											</span>
										</a>
									</li>

									<li class="menu-company ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Company</span>
											</span>
										</a>
									</li>

									<li class="menu-investor-relations ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Investor Relations</span>
											</span>
										</a>
									</li>

									<li class="menu-typography ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Typography</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="footer-column">
							<div class="footer-border">
								<div class="footer-title">
									<h2>Why choose Us</h2>
								</div>

								<ul id="menu-why-choose-us-1" class="menu">
									<li class="menu-about-us ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">About Us</span>
											</span>
										</a>
									</li>

									<li class="menu-blog ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Blog</span>
											</span>
										</a>
									</li>

									<li class="menu-company ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Company</span>
											</span>
										</a>
									</li>

									<li class="menu-investor-relations ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Investor Relations</span>
											</span>
										</a>
									</li>

									<li class="menu-typography ya-menu-custom level1">
										<a href="#" class="item-link">
											<span class="have-title">
												<span class="menu-title">Typography</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="footer-column">
							<div class="footer-border">
								<div class="footer-title">
									<h2>Contact Us</h2>
								</div>

								<div class="textwidget">
									<div class="content-block-footer">
										<span style="display:inline-block; padding-bottom:10px;">Maecenas euismod felis et purus consectetur, quis fermentum velition. Aenean egestas quis turpis vehicula.</span>

										<ul>
											<li>
												<span class="fa fa-map-marker" style="font-size: 16px; position: relative; top: 1px;">&nbsp;</span>No 304, Sky Tower, New York, USA
											</li>

											<li>
												<span class="fa fa-mobile-phone" style="font-size: 18px; position: relative; top: 4px;">&nbsp;</span>Telephone:
												<a title="Call:(801) 2345 - 6789" href="tel:+84123456789">(801) 2345 - 6789</a>
											</li>

											<li>
												<span class="fa fa-envelope" style="font-size: 11px; position: relative;">&nbsp;</span>E-mail:
												<a title="Contact@gmail.com" href="mailto:Contact@gmail.com">Contact@gmail.com</a>
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
                                copy right&#169;BestForYou
							</div>
						</div>
					</div>
				</div>
				<!--end: FOOTER TAGS -->
			</div>
			<!-- end : footer wrap-->
		</div>
		<!-- END FOOTER -->
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
</body>

</html>
