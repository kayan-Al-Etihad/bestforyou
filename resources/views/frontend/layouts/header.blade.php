<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            @php
                                $settings=DB::table('settings')->get();

                            @endphp
                            <li><i class="ti-headphone-alt"></i>@foreach($settings as $data) {{$data->phone}} @endforeach</li>
                            <li><i class="ti-email"></i> @foreach($settings as $data) {{$data->email}} @endforeach</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            {{-- <li><i class="ti-location-pin"></i> <a href="{{route('order.track')}}">@lang('auth.track_order')</a></li> --}}
                                {{-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> --}}
                                @auth
                                    @if(Auth::user()->role=='admin')
                                        <li><i class="ti-user"></i> <a href="{{route('admin')}}"  target="_blank">@lang('auth.dashboard')</a></li>
                                    @else
                                        <li><i class="ti-user"></i> <a href="{{route('user')}}"  target="_blank">@lang('auth.dashboard')</a></li>
                                    @endif
                                    <li><i class="ti-power-off"></i> <a href="{{route('user.logout')}}">@lang('auth.logout')</a></li>

                                @else
                                    <li><i class="ti-power-off"></i><a href="{{route('login.form')}}">@lang('auth.login') /</a> <a href="{{route('register.form')}}">@lang('auth.register')</a></li>
                                @endauth
                                @if (app()->getLocale() == 'ar')
                                <li class="lang">
                                    <a id="lang" href="#">AR</a>
                                        <ul class="lang dropdown border-0 shadow">
                                            <li>
                                                <a href="/lang/en">EN</a>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                @else
                                <li class="lang">
                                    <a id="lang" href="#">En</a>
                                        <ul class="lang dropdown border-0 shadow">
                                            <li>
                                                <a href="/lang/ar">AR</a>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                @endif
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        @php
                            $settings=DB::table('settings')->get();
                        @endphp
                        <a href="{{route('home')}}"><img src="@foreach($settings as $data) {{$data->logo}} @endforeach" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        @if (app()->getLocale() == "ar")
                        <div class="search-bar">
                            <select>
                                <option >@lang('auth.all_category')</option>
                                @foreach(Helper::getAllCategory() as $cat)
                                    <option>{{$cat->title_ar}}</option>
                                @endforeach
                            </select>
                            <form method="POST" action="{{route('product.search')}}">
                                @csrf
                                <input dir="rtl" class="text-right" name="search" placeholder="@lang('auth.search')" type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        @else
                        <div class="search-bar">
                            <select>
                                <option >@lang('auth.all_category')</option>
                                @foreach(Helper::getAllCategory() as $cat)
                                    <option>{{$cat->title}}</option>
                                @endforeach
                            </select>
                            <form method="POST" action="{{route('product.search')}}">
                                @csrf
                                <input name="search" placeholder="@lang('auth.search')" type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar shopping">
                            @php
                                $total_prod=0;
                                $total_amount=0;
                            @endphp
                           @if(session('wishlist'))
                                @foreach(session('wishlist') as $wishlist_items)
                                    @php
                                        $total_prod+=$wishlist_items['quantity'];
                                        $total_amount+=$wishlist_items['amount'];
                                    @endphp
                                @endforeach
                           @endif
                            <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count">{{Helper::wishlistCount()}}</span></a>
                            <!-- Shopping Item -->
                            @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromWishlist())}} @lang('auth.items')</span>
                                        <a href="{{route('wishlist')}}">@lang('auth.view_wishlist')</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromWishlist() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('wishlist-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    @if (app()->getLocale() == "ar")
                                    <div class="bottom">
                                        <div class="total">
                                            <span style="float: right !important">@lang('auth.total')</span>
                                            <span style="float: left !important" class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('cart')}}" class="btn animate">@lang('auth.cart')</a>
                                    </div>
                                    @else
                                    <div class="bottom">
                                        <div class="total">
                                            <span>@lang('auth.total')</span>
                                            <span class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('cart')}}" class="btn animate">@lang('auth.cart')</a>
                                    </div>
                                    @endif
                                </div>
                            @endauth
                            <!--/ End Shopping Item -->
                        </div>
                        {{-- <div class="sinlge-bar">
                            <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div> --}}
                        <div class="sinlge-bar shopping">
                            <a href="{{route('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a>
                            <!-- Shopping Item -->
                            @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromCart())}} @lang('auth.items')</span>
                                        <a href="{{route('cart')}}">@lang('auth.view_cart')'</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromCart() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    <div class="bottom">
                                        @if (app()->getLocale() == "ar")
                                        <div class="bottom">
                                            <div class="total">
                                                <span style="float: right !important">@lang('auth.total')</span>
                                                <span style="float: left !important" class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                            </div>
                                            <a href="{{route('cart')}}" class="btn animate">@lang('auth.checkout')</a>
                                        </div>
                                        @else
                                        <div class="bottom">
                                            <div class="total">
                                                <span>@lang('auth.total')</span>
                                                <span class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                            </div>
                                            <a href="{{route('cart')}}" class="btn animate">@lang('auth.checkout')</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            @endauth
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse d-flex align-items-center jystify-content-center" style="display: flex !important;justify-content:center">
                                    <div class="nav-inner">
                                        @if (app()->getLocale() == "ar")
                                            <ul class="nav main-menu menu navbar-nav" dir="rtl">
                                                <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">@lang('auth.home')</a></li>
                                                <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">@lang('auth.about')</a></li>
                                                <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">@lang('auth.products')</a><span class="@if(Request::path()=='product-grids'||Request::path()=='product-lists') New @endif new">@lang('auth.new')</span></li>
                                                    {{Helper::getHeaderCategory()}}
                                                {{-- <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">@lang('auth.blog')</a></li> --}}

                                                <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact.home')}}">@lang('auth.contact')</a></li>
                                                <li class="{{Request::path()=='join' ? 'active' : ''}}"><a href="{{route('join.home')}}">@lang('auth.join')</a></li>
                                            </ul>
                                        @else
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">@lang('auth.home')</a></li>
                                                <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">@lang('auth.about')</a></li>
                                                <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">@lang('auth.products')</a><span class="@if(Request::path()=='product-grids'||Request::path()=='product-lists') New @endif new">@lang('auth.new')</span></li>
                                                    {{Helper::getHeaderCategory()}}
                                                {{-- <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">@lang('auth.blog')</a></li> --}}

                                                <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact.home')}}">@lang('auth.contact')</a></li>
                                                <li class="{{Request::path()=='join' ? 'active' : ''}}"><a href="{{route('join.home')}}">@lang('auth.join')</a></li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
