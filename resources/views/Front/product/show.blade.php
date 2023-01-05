@extends('layout.front.index')
@section('title')
   {{ $product->product_name }}
@endsection

@section('content')
<!-- MAIN -->
<div id="main" style="margin-top:80px" class="theme-clearfix" role="document">
    <div class="breadcrumbs theme-clearfix">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a id="home" href="home_style_2.html">Home</a>
                    <span class="go-page"></span>
                </li>

                <li>
                    <a id="shop" href="home_style_2_shop_full_sidebar.html">Apparel & Accessories</a>
                    <span class="go-page"></span>
                </li>

                <li class="active">
                    <span>Morbi vulputate diam</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12 col-xs-12" role="main">
                <div id="container">
                    <div id="content" role="main">
                        <div class="single-product clearfix">
                            <div itemscope="" id="product-01" class="product">
                                <div class="single-product-top row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div id="product_img_01" class="product-images" data-rtl="false" data-vertical="true">
                                            <div class="product-images-container clearfix thumbnail-left">
                                                <div class="slider product-responsive-thumbnail" id="product_thumbnail_01">
                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""
                                                                    src="{{ $product->cover }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""
                                                                    src="{{ $product->cover }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""
                                                                    src="{{ $product->cover }}" />
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""
                                                                    src="{{ $product->cover }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""
                                                                    src="{{ $product->cover }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""
                                                                    src="{{ $product->cover }}"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Image Slider -->
                                                <div class="slider product-responsive">
                                                    <div class="item-img-slider">
                                                       <div class="images">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="images/17.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                                                <img 	width="600" height="600" class="attachment-shop_single size-shop_single" alt=""
                                                                        src="{{ $product->cover }}"/>
                                                            </a>
                                                       </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="images/13_1.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                                                <img 	width="600" height="600" class="attachment-shop_single size-shop_single" alt=""
                                                                        src="{{ $product->cover }}" />
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="images/15_3.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                                                <img 	width="600" height="600" class="attachment-shop_single size-shop_single" alt=""
                                                                        src="{{ $product->cover }}" />
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="images/12.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                                                <img 	width="600" height="600" class="attachment-shop_single size-shop_single" alt=""
                                                                        src="{{ $product->cover }}" />
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                       <div class="images">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="images/11.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                                                <img 	width="600" height="600" class="attachment-shop_single size-shop_single" alt=""
                                                                        src="{{ $product->cover }}" />
                                                            </a>
                                                       </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="images/17.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                                                <img 	width="600" height="600" class="attachment-shop_single size-shop_single" alt=""
                                                                        src="{{ $product->cover }}" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Thumbnail Slider -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-summary col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <h1 class="product_title">{{ $product->product_name }}</h1>

                                        <div class="product-stock in-stock">
                                            Availability:
                                            @if ($product->status == 1)
                                            <span>In stock</span>
                                            @else
                                            <span>Not avalabile</span>
                                            @endif
                                        </div>

                                        <div class="product_meta"></div>

                                        <div class="product-description">
                                            <h2 class="quick-overview">QUICK OVERVIEW</h2>
                                            <p>{{ $product->description }}.</p>
                                        </div>

                                        <div>
                                            <p class="price">
                                                <del>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}
                                                    </span>
                                                </del>

                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->sale_price }}
                                                    </span>
                                                </ins>
                                            </p>
                                        </div>

                                        <div class="product-summary-bottom clearfix">
                                            <form class="cart" method="post" enctype="multipart/form-data">
                                                <div class="quantity">
                                                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
                                                </div><button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                            </form>
                                        </div>

                                        <div class="product_meta">
                                            <p class="posted_in">
                                                <b>Category:</b>
                                                @foreach ($categories as $category)
                                                <a href="" rel="tag">{{ $category->category_name }}</a>,
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <!--- summary-bottom --->
                                </div>

                                <!-- .summary -->
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tab-col-12 description">
                                        <div class="woocommerce-tabs wc-tabs-wrapper">
                                            <ul class="tabs wc-tabs" style="display: flex;gap:15px;margin:0 !important">
                                                <li class="description_tab">
                                                    <a href="#tab-description">Description</a>
                                                </li>

                                                <li class="reviews_tab active">
                                                    <a href="#tab-reviews">Reviews (0)</a>
                                                </li>
                                            </ul>

                                            <div class="panel entry-content wc-tab" id="tab-description" style="display: none;margin-top:15px">
                                                <p>{{ $product->description }}.</p>
                                              </div>

                                            <div class="panel entry-content wc-tab" id="tab-reviews" style="display: block;margin-top:15px">
                                                <div id="reviews">
                                                    <div id="comments">
                                                        <h2>Reviews</h2>
                                                        @if($product->comments->count() < 0)
                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                        @else
                                                        @foreach ($product->comments as $comment)
                                                        <div class=" m-0 p-0" style="border-bottom: 1px solid #000;">
                                                            <div class="fix">
                                                                <div class="floatleft mbl-center">
                                                                    <h5 class="text-uppercase mb-0"><strong>{{ $comment->guest_name }}</strong></h5>
                                                                    <p class="reply-date">{{ $comment->created_at->diffForHumans() }}</p>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">{{ $comment->comment }}.</p>
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <h4>Write your comment</h4>
                                                                <form action="" method="post" id="commentform" class="comment-form">

                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Review</label>
                                                                        <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                    </p>

                                                                    <p class="comment-form-author">
                                                                        <label for="author">Name <span class="required">*</span></label>
                                                                        <input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true" />
                                                                    </p>

                                                                    <p class="comment-form-email">
                                                                        <label for="email">Email <span class="required">*</span></label>
                                                                        <input id="email" class="form-control" name="email" type="text" value="" size="30" aria-required="true" />
                                                                    </p>

                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="add_to_cart_button" value="Submit" />
                                                                    </p>
                                                                </form>
                                                            </div>
                                                            <!-- #respond -->
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
                                            <div class="widget-inner">
                                                <div id="sw_related_upsell_widget-2" class="sw-woo-container-slider upsells-products responsive-slider clearfix" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                                    <div class="resp-slider-container">
                                                        <div class="block-title">
                                                            <strong>
                                                                <span>RELATED PRODUCTS</span>
                                                            </strong>
                                                            <div class="sn-img icon-bacsic2"></div>
                                                        </div>

                                                        <div class="slider responsive">
                                                            @foreach ($relatedProducts as $product)
                                                            <div class="item">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-img products-thumb">
                                                                            <!-- quickview & thumbnail  -->

                                                                            <a href="">
                                                                                <div class="product-thumb-hover">
                                                                                    <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
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
                        </div>
                    </div>
                </div>
            </div>
            <!--- contents-detail --->
        </div>
    </div>
</div>
<!-- END MAIN -->
@endsection
