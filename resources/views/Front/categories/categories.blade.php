@extends('layout.front.index')
@section('title')@section('title')
   Categories
@endsection

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
                                @foreach ($AllCategories as $category)
                                <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 category">
                                    <div class="products-entry clearfix">
                                        <div class="products-thumb">
                                            <a href="" class="woocommerce-LoopProduct-link"></a>
                                            <a href="{{ route('front.subCategory', $category->category_slug) }}">
                                                <div class="product-thumb-hover">
                                                    @php
                                                        $image = $category->image;
                                                    @endphp
                                                    <img width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                            src="images/{{ $image }}" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="products-content">
                                            <div class="item-content">
                                                <h4>
                                                    <a href="{{ route('front.subCategory', $category->category_slug) }}" class="post-title" title="{{ $category->category_name }}">{{ $category->category_name }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                         <div class="products-nav">

                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                         {{ $AllCategories->links() }}
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
