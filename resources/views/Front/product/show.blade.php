@extends('layout.front.index')
@section('title')
   {{ $product->product_name }}
@endsection
@section('content')
@if (app()->getLocale() == "ar")
<!-- MAIN -->
<div dir="rtl" id="main" style="margin-top:80px" class="theme-clearfix" role="document">
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
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                    src="{{ $product->cover }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                    src="{{ asset('images') }}/{{ $product->image1 }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                    src="{{ asset('images') }}/{{ $product->image2 }}" />
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Image Slider -->
                                                <div class="slider product-responsive">
                                                    <div class="item-img-slider">
                                                       <div class="images">
                                                        <img 	width="600" height="600" class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                        src="{{ $product->cover }}"/>
                                                       </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <img 	width="600" height="600" class="attachment-shop_single size-shop_single  wp-post-image" alt=""
                                                                        src="{{ asset('images') }}/{{ $product->image1 }}" />
                                                        </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <img 	width="600" height="600" class="attachment-shop_single size-shop_single  wp-post-image" alt=""
                                                                        src="{{ asset('images') }}/{{ $product->image2 }}" />
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
                                            @lang('auth.availability'):
                                            @if ($product->status == 1)
                                            <span>@lang('auth.availability_option1')</span>
                                            @else
                                            <span>@lang('auth.availability_option2')</span>
                                            @endif
                                        </div>

                                        <div class="product_meta"></div>

                                        <div class="product-description">
                                            <h2 class="quick-overview">@lang('auth.quick_overview')</h2>
                                            <p>{{ $product->description }}.</p>
                                        </div>

                                        <div>
                                            <p class="price">

                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->sale_price }}
                                                    </span>
                                                </ins>
                                            </p>
                                        </div>

                                        <div class="product-summary-bottom clearfix">
                                        </div>

                                        <div class="product_meta">
                                            <p class="posted_in">
                                                <b>@lang('auth.categories'):</b>
                                                <br>

                                                @foreach ($category->where('category_id', '==', $cat->category_id) as $category)
                                                    <a href="{{ route('front.subCategory', $category->category_id) }}">{{ $category->category_name }}</a>
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
                                                    <a href="#tab-description">@lang('auth.single_description')</a>
                                                </li>

                                                <li class="reviews_tab active">
                                                    <a href="#tab-reviews">@lang('auth.single_reviews') ({{ $product_feedback->count() }})</a>
                                                </li>
                                            </ul>

                                            <div class="panel entry-content wc-tab" id="tab-description" style="display: none;margin-top:15px">
                                                <p>{{ $product->description }}.</p>
                                              </div>

                                            <div class="panel entry-content wc-tab" id="tab-reviews" style="display: block;margin-top:15px">
                                                <div id="reviews">
                                                    <div id="comments">
                                                        <h2>@lang('auth.single_reviews')</h2>
                                                        @if($product_feedback->count() < 0)
                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                        @else
                                                        @foreach ($product_feedback as $product_feedback)
                                                        @if ($product_feedback->status == 1)
                                                        <div class=" m-0 p-0" style="border-bottom: 1px solid #000;">
                                                            <div class="fix">
                                                                <div class="floatleft mbl-center" style="display: flex;align-items:center;gap:15px">
                                                                    <h5 class="text-uppercase mb-0"><strong>{{ $product_feedback->name }}</strong></h5>
                                                                    <p class="reply-date">{{ $product_feedback->created_at->diffForHumans() }}</p>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">{{ $product_feedback->feedback }}.</p>
                                                        </div>
                                                        @else
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">

                                                                @if ($message = Session::get('status'))
                                                                <div class="alert alert-success alert-block">
                                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                                    <strong>{{ $message }}</strong>
                                                                </div>
                                                                @endif
                                                                <h4>@lang('auth.single_write_comment')</h4>
                                                                <form action="{{ route('feed.store', $product->product_slug) }}" method="post" id="commentform" class="comment-form">
                                                                    @csrf
                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">@lang('auth.input_reviews')</label>
                                                                        <textarea id="comment" class="form-control" name="feedback" cols="45" rows="8" aria-required="true"></textarea>
                                                                        @error('feedback')
                                                                        <span class=" invalid-feedback">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </p>

                                                                    <p class="comment-form-author">
                                                                        <label for="author">@lang('auth.input_name') <span class="required">*</span></label>
                                                                        <input id="author" class="form-control" name="name" type="text" value="" size="30" aria-required="true" />
                                                                        @error('name')
                                                                        <span class=" invalid-feedback">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </p>

                                                                    <p class="comment-form-email">
                                                                        <label for="email">@lang('auth.input_email') <span class="required">*</span></label>
                                                                        <input id="email" class="form-control" name="email" type="text" value="" size="30" aria-required="true" />
                                                                        @error('email')
                                                                        <span class=" invalid-feedback">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </p>

                                                                    <p class="comment-form-email">
                                                                        <input class="form-control" name="status" type="hidden" value="0" size="30" aria-required="true" />
                                                                    </p>

                                                                    <p class="comment-form-email">
                                                                        <input class="form-control" name="product_id" type="hidden" value="{{ $product->product_id }}" size="30" aria-required="true" />
                                                                    </p>

                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="" value="@lang('auth.input_submit')" />
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

                                        <div dir="ltr" class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
                                            <div class="widget-inner">
                                                <div id="sw_related_upsell_widget-2" class="sw-woo-container-slider upsells-products responsive-slider clearfix" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                                    <div class="resp-slider-container">
                                                        <div class="block-title text-right">
                                                            <strong style="margin-right: 50px">
                                                                <span>@lang('auth.single_related_products')</span>
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

                                                                            <a onclick="onCahnge('{{ $product->product_name }}', '{{ $product->cover }}', '{{ $product->description }}')" class="sm_quickview_handler-list"  href="" data-toggle="modal" data-target="#exampleModalCenter">Quick View </a>
                                                                        </div>

                                                                        <div class="item-content">

                                                                            @if (app()->getLocale() == "en")
                                                                            <h4>
                                                                                <a href="{{ route('front.show', $product->product_slug) }}" title="{{ $product->product_name }}">{{ $product->product_name }}</a>
                                                                            </h4>
                                                                            @else
                                                                            <h4>
                                                                                <a href="{{ route('front.show', $product->product_slug) }}" title="{{ $product->product_name_ar }}">{{ $product->product_name_ar }}</a>
                                                                            </h4>
                                                                            @endif

                                                                            <div class="item-price">
                                                                                <span>
                                                                                    <ins>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}
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
@endif
@if (app()->getLocale() == "en")
<!-- MAIN -->
<div id="main" style="margin-top:80px" class="theme-clearfix" role="document">

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
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                    src="{{ $product->cover }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                    src="{{ asset('images') }}/{{ $product->image1 }}"/>
                                                        </div>
                                                    </div>

                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img 	width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                                                    src="{{ asset('images') }}/{{ $product->image2 }}" />
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Image Slider -->
                                                <div class="slider product-responsive">
                                                    <div class="item-img-slider">
                                                       <div class="images">
                                                        <img 	width="600" height="600" class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                        src="{{ $product->cover }}"/>
                                                       </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <img 	width="600" height="600" class="attachment-shop_single size-shop_single  wp-post-image" alt=""
                                                                        src="{{ asset('images') }}/{{ $product->image1 }}" />
                                                        </div>
                                                    </div>

                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <img 	width="600" height="600" class="attachment-shop_single size-shop_single  wp-post-image" alt=""
                                                                        src="{{ asset('images') }}/{{ $product->image2 }}" />
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

                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->sale_price }}
                                                    </span>
                                                </ins>
                                            </p>
                                        </div>

                                        <div class="product-summary-bottom clearfix">
                                        </div>

                                        <div class="product_meta">
                                            <p class="posted_in">
                                                <b>Category:</b>
                                                <br>
                                                @foreach ($category->where('category_id', '==', $cat->category_id) as $category)
                                                    <a href="{{ route('front.subCategory', $category->category_id) }}">{{ $category->category_name }}</a>
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
                                                    <a href="#tab-reviews">Reviews ({{ $product_feedback->count() }})</a>
                                                </li>
                                            </ul>

                                            <div class="panel entry-content wc-tab" id="tab-description" style="display: none;margin-top:15px">
                                                <p>{{ $product->description }}.</p>
                                              </div>

                                            <div class="panel entry-content wc-tab" id="tab-reviews" style="display: block;margin-top:15px">
                                                <div id="reviews">
                                                    <div id="comments">
                                                        <h2>Reviews</h2>
                                                        @if($product_feedback->count() < 0)
                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                        @else
                                                        @foreach ($product_feedback as $product_feedback)
                                                        @if ($product_feedback->status == 1)
                                                        <div class=" m-0 p-0" style="border-bottom: 1px solid #000;">
                                                            <div class="fix">
                                                                <div class="floatleft mbl-center" style="display: flex;align-items:center;gap:15px">
                                                                    <h5 class="text-uppercase mb-0"><strong>{{ $product_feedback->name }}</strong></h5>
                                                                    <p class="reply-date">{{ $product_feedback->created_at->diffForHumans() }}</p>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">{{ $product_feedback->feedback }}.</p>
                                                        </div>
                                                        @else
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">

                                                                @if ($message = Session::get('status'))
                                                                <div class="alert alert-success alert-block">
                                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                                    <strong>{{ $message }}</strong>
                                                                </div>
                                                                @endif
                                                                <h4>Write your comment</h4>
                                                                <form action="{{ route('feed.store', $product->product_slug) }}" method="post" id="commentform" class="comment-form">
                                                                    @csrf
                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Review</label>
                                                                        <textarea id="comment" class="form-control" name="feedback" cols="45" rows="8" aria-required="true"></textarea>
                                                                        @error('feedback')
                                                                        <span class=" invalid-feedback">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </p>

                                                                    <p class="comment-form-author">
                                                                        <label for="author">Name <span class="required">*</span></label>
                                                                        <input id="author" class="form-control" name="name" type="text" value="" size="30" aria-required="true" />
                                                                        @error('name')
                                                                        <span class=" invalid-feedback">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </p>

                                                                    <p class="comment-form-email">
                                                                        <label for="email">Email <span class="required">*</span></label>
                                                                        <input id="email" class="form-control" name="email" type="text" value="" size="30" aria-required="true" />
                                                                        @error('email')
                                                                        <span class=" invalid-feedback">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </p>

                                                                    <p class="comment-form-email">
                                                                        <input class="form-control" name="status" type="hidden" value="0" size="30" aria-required="true" />
                                                                    </p>

                                                                    <p class="comment-form-email">
                                                                        <input class="form-control" name="product_id" type="hidden" value="{{ $product->product_id }}" size="30" aria-required="true" />
                                                                    </p>

                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="" value="Submit" />
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
                                                                                            <span class="woocommerce-Price-currencySymbol">EGH</span>{{ $product->price }}
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
@endif
@endsection
