@extends('frontend.layouts.master')


@section('title','Best For You')

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
                                <li class="active"><a href="{{ route('login') }}">@lang('auth.login')</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="{{ route('home') }}">@lang('auth.home')<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="{{ route('login') }}">@lang('auth.login')</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row">
            @if (app()->getLocale() == "ar")
                <div class="col-lg-6 offset-lg-3 col-12 text-right" dir="rtl">
                    <div class="login-form">
                        <h2>@lang('auth.login')</h2>
                        <p>@lang('auth.please_register')</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{route('login.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>@lang('auth.email')<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>@lang('auth.password')<span>*</span></label>
                                        <input type="password" name="password" placeholder="" required="required" value="{{old('password')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">@lang('auth.login')</button>
                                        <a href="{{route('register.form')}}" class="btn">@lang('auth.register')</a>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">@lang('auth.remmber_me')</label>
                                    </div>
                                    {{-- @if (Route::has('password.request'))
                                        <a class="lost-pass" href="{{ route('password.reset') }}">
                                            @lang('auth.lost_password')
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            @else
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <h2>Login</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{route('login.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Password<span>*</span></label>
                                        <input type="password" name="password" placeholder="" required="required" value="{{old('password')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Login</button>
                                        <a href="{{route('register.form')}}" class="btn">Register</a>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Remember me</label>
                                    </div>
                                    {{-- @if (Route::has('password.request'))
                                        <a class="lost-pass" href="{{ route('password.reset') }}">
                                            Lost your password?
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            @endif
            </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection
@push('styles')
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
@endpush
