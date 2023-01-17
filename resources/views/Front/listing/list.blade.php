@extends('layout.front.index')
@section('title')
   Products
@endsection
<style>
    .woocommerce .products-nav, .woocommerce-page .products-nav{
        border: 1px solid #ddd;
        margin-bottom: 30px;
        display: inline-block;
        width: 100%;
        padding: 6px;
    }
</style>
@section('content')

<!-- MAIN -->
<div id="main" class="theme-clearfix" role="document" style="margin: 50px 0">


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(app()->getLocale() == 'ar')
                <input type="text" class="form-control text-right" placeholder="@lang('auth.product_list_search')" id="search">
                @endif
                @if(app()->getLocale() == 'en')
                <input type="text" class="form-control" placeholder="@lang('auth.product_list_search')" id="search">
                @endif
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
                                @foreach ($products as $product)
                                <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 category">
                                    <div class="products-entry clearfix">
                                        <div class="products-thumb">
                                            <a href="" class="woocommerce-LoopProduct-link">

                                            </a>

                                            <a href="{{ route('front.show', $product->product_slug) }}">
                                                <div class="product-thumb-hover">
                                                    <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                            src="{{ $product->cover }}" />
                                                </div>
                                            </a>

                                            <a onclick="onCahnge('{{ $product->product_name }}', '{{ $product->cover }}', '{{ $product->description }}')" class="sm_quickview_handler-list"  href="" data-toggle="modal" data-target="#exampleModalCenter">Quick View </a>
                                        </div>

                                        <div class="products-content">
                                            <div class="item-content">
                                                <h4>
                                                    <a href="{{ route('front.show', $product->product_slug) }}" class="post-title" title="{{ $product->product_name }}">{{ $product->product_name }}</a>
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
                                                    @if (session('success'))
                                                    <div class="alert">
                                                        {{ session('success') }}
                                                    </div>
                                                    @endif

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

                         <div class="products-nav">

                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                         {!! $products->links() !!}
                                    </ul>
                                </nav>
                                <style>
                                    .pagination .page-item.active sapn.page-link{
                                        background-color: #d40110 !important;
                                    }
                                </style>
                            </div>
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








