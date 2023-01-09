@extends('layout.front.index')
@section('title')
{{ $category->category_name }}
@endsection
@section('content')
<!-- MAIN -->
<div id="main" class="theme-clearfix" role="document" style="margin: 50px 0">

    <div class="breadcrumbs theme-clearfix d-block" style="display: block">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a id="home" href="{{ route('home') }}">Home</a>
                    <span class="go-page"></span>
                </li>
                <li>
                    <span>Categories</span>
                    <span class="go-page"></span>
                </li>

                <li class="active">
                    <span>{{ $category->category_name }}</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <input type="text" class="form-control" placeholder="Search for any thing....." id="search">
            </div>
        </div>
        <div class="row">

            <div id="contents" class="content col-lg-12 col-md-8 col-sm-0" role="main">
                <div id="container">
                    <div id="content" role="main">
                        <div class="products-wrapper">
                            <div class="image-category">
                                <div class="textwidget">
                                    <img src="images/cover_facebook_indiawebsite.png" alt="">
                                </div>
                            </div>

                            <ul class="products-loop grid clearfix">

                                <li class="clearfix divider-product">
                                @foreach ($category->products as $product)
                                <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 category">
                                    <div class="products-entry clearfix">
                                        <div class="products-thumb">
                                            <a href="" class="woocommerce-LoopProduct-link">

                                            </a>

                                            <a href="{{ route('front.show', $product->product_slug) }}">
                                                <div class="product-thumb-hover">
                                                    <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                            src="{{ asset('images/sample-pr.jpg') }}"
                                                            {{-- srcset="images/post14.png 300w, images/2-3-260x260.jpg 260w, images/2-3.jpg 600w, images/2-3-180x180.jpg 180w"  --}}
                                                            sizes="(max-width: 300px) 100vw, 300px" />
                                                </div>
                                            </a>

                                            <a onclick="onCahnge('{{ $product->product_name }}', '{{ $product->cover }}', '{{ $product->description }}')" class="sm_quickview_handler-list"  href="" data-toggle="modal" data-target="#exampleModalCenter">Quick View </a>
                                        </div>

                                        <div class="products-content">
                                            <div class="item-content">
                                                <h4>
                                                    <a href="{{ route('front.show', $product->product_slug) }}" class="post-title" title="Steak veniam">{{ $product->product_name }}</a>
                                                </h4>



                                                <div class="item-price">
                                                    <span>
                                                        {{-- <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">EGP </span>86.00
                                                            </span>
                                                        </del>
                                                         --}}
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">EGP </span>{{ $product->price }}
                                                            </span>
                                                        </ins>
                                                    </span>
                                                </div>

                                                <div class="desc std">
                                                    <p>{{ $product->description }}</p>
                                                </div>

                                                <div class="item-bottom clearfix">

                                                    <div class="clear"></div>

                                                    <a rel="nofollow" href="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Add to cart </a>

                                                    <!-- <div class="woocommerce product compare-button">
                                                        <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                         {{-- <div class="products-nav">

                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                         {!! $products->links() !!}
                                    </ul>
                                </nav>
                                <style>
                                    .pagination .page-item.active sapn.page-link{
                                        background-color: orangered !important;
                                    }
                                </style>
                            </div> --}}
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN -->
<script type="text/javascript">
    const search = document.getElementById('search');
    search.addEventListener("input", (e)=>{
        e.preventDefault();
        const val = e.target.value.toLowerCase();
        console.log(val);
        const categories = document.querySelectorAll(".category");
        // console.log(categories);
        categories.forEach(category => {
            const dot = category.querySelector('.post-title').textContent;
            console.log(dot);
            if(dot.toLowerCase().includes(val)){
                category.style.display = "block";
            }else{
                category.style.display = "none";
            }
        });
    })
</script>
@endsection
