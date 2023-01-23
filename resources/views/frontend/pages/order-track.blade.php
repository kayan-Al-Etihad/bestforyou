@extends('frontend.layouts.master')

@section('title','E-SHOP || Order Track Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (app()->getLocale() == "ar")
                        <div class="bread-inner text-right" dir="rtl">
                            <ul class="bread-list">
                                <li><a href="{{ route('home') }}">@lang('auth.home')<i class="ti-arrow-left"></i></a></li>
                                <li class="active"><a href="/product/track">@lang('auth.order_track')</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="{{ route('home') }}">@lang('auth.home')<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="/product/track">@lang('auth.order_track')</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
    @if (app()->getLocale() == "ar")
        <div class="tracking_box_inner text-right" dir="rtl">
            <p>@lang('auth.shipping_cost').</p>
            <form class="row tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Enter your order number">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">@lang('auth.track_order')</button>
                </div>
            </form>
        </div>
    @endif
    </div>
</section>
@endsection