@extends('layout.front.index')
@section('title')
{{ $category->category_name }}
@endsection
@section('content')
<!-- MAIN -->
<div id="main" class="theme-clearfix" role="document" style="margin: 50px 0">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (app()->getLocale() == 'ar')
                <input type="text" class="form-control text-right" placeholder="@lang('auth.product_list_search')" id="search">
                @else
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
                                @if (isset($subCategory))
                                    @foreach ($subCategory as $category)
                                    <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 category">
                                        <div class="products-entry clearfix">
                                            <div class="products-thumb">
                                                <a href="" class="woocommerce-LoopProduct-link">
                                                </a>
                                                <a href="{{ route('front.showCategory', $category->category_id) }}">
                                                    <div class="product-thumb-hover">
                                                        <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                src="{{ asset('images') }}/{{ $category->image }}" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="products-content">
                                                <div class="item-content">
                                                    <h4>
                                                        <a href="{{ route('front.showCategory', $category->category_id) }}" class="post-title" title="Steak veniam">{{ $category->category_name }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
                                @foreach ($productCat as $prCat)
                                    @foreach ($product->where('product_id', '==',$prCat->product_id) as $p)
                                        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 category">
                                            <div class="products-entry clearfix">
                                                <div class="products-thumb">
                                                    <a href="" class="woocommerce-LoopProduct-link">
                                                    </a>
                                                    <a href="{{ route('front.show', $p->product_slug) }}">
                                                        <div class="product-thumb-hover">
                                                            <img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""
                                                                    src="{{ asset('images/sample-pr.jpg') }}"
                                                                    {{-- srcset="images/post14.png 300w, images/2-3-260x260.jpg 260w, images/2-3.jpg 600w, images/2-3-180x180.jpg 180w"  --}}
                                                                    sizes="(max-width: 300px) 100vw, 300px" />
                                                        </div>
                                                        <a onclick="onCahnge('{{ $p->product_name }}', '{{ $p->cover }}', '{{ $p->description }}')" class="sm_quickview_handler-list"  href="" data-toggle="modal" data-target="#exampleModalCenter">Quick View </a>

                                                    </a>
                                                </div>
                                                <div class="products-content">
                                                    <div class="item-content">
                                                        <h4>
                                                            <a href="{{ route('front.show', $p->product_slug) }}" class="post-title" title="Steak veniam">{{ $p->product_name }}</a>
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
                                                                        <span class="woocommerce-Price-currencySymbol">EGP </span>{{ $p->price }}
                                                                    </span>
                                                                </ins>
                                                            </span>
                                                        </div>
                                                        <div class="desc std">
                                                            <p>{{ $p->description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endforeach
                            </ul>
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
