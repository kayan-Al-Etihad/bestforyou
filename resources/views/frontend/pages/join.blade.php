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
                                <li class="active"><a href="{{ route('join.home') }}">@lang('auth.join')</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="{{ route('home') }}">@lang('auth.home')<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="{{ route('join.home') }}">@lang('auth.join')</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact -->
	<section id="join-us" class="contact-us section">
		<div class="container">
				<div class="join-head">
                    @if (app()->getLocale() == "ar")
					<div class="row" dir="rtl">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
								</div>
								<form method="post" class="form border p-5" action="{{route('join.store')}}" id="joinForm" novalidate="novalidate" enctype="multipart/form-data" >
									@csrf
									<div class="row text-right">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>@lang('auth.name')<span>*</span></label>
                                                <input class="w-100" required name="name" id="name" type="text" value="{{old('name')}}" placeholder="@lang('auth.name')">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>@lang('auth.email')<span>*</span></label>
                                                <input class="w-100" required name="email" type="email" value="{{old('email')}}" id="email" placeholder="@lang('auth.email')">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>@lang('auth.phone')<span>*</span></label>
                                                <input class="w-100" required id="phone" name="phone" value="{{old('phone')}}" type="number" placeholder="@lang('auth.phone')">
                                                @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
										<div class="col-lg-6 col-12">
											<div class="form-group text-right">
												<label for="City">@lang('auth.city')<span>*</span></label>
                                                <select name="city" id="City" class="w-100 text-right" value="{{old('city')}}">
                                                    <option class="" value="">@lang('auth.select_your_city')</option>
                                                    <option class="text-right" value="@lang('auth.Cairo')">@lang('auth.Cairo')</option>
                                                    <option class="text-right" value="@lang('auth.Sharm')">@lang('auth.Sharm')</option>
                                                    <option class="text-right" value="@lang('auth.alexandria')">@lang('auth.alexandria')</option>
                                                    <option class="text-right" value="@lang('auth.taba')">@lang('auth.taba')</option>
                                                    <option class="text-right" value="@lang('auth.dahab')">@lang('auth.dahab')</option>
                                                </select>
                                                @error('city')
                                                <span class="text-danger mx-2">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>@lang('auth.cv')<span>*</span></label>
												<input required class="p-0 h-100 lh-base" name="cv" type="file" value="{{old('cv')}}">
                                                @error('cv')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<input type="submit" class="btn" name="submit" id="" value="@lang('auth.send')">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
                            <div class="single-head p-5">
                                @php
                                    $settings=DB::table('settings')->get()->first();
                                @endphp
								<div class="single-info">
                                    <div class="title">
                                    	<img src="{{ $settings->logo }}" alt="">
								    </div>
								</div>
								<div class="single-info">
                                    <div class="title text-right">
                                    	<h3>@lang('auth.join')</h3>
									    <h4>@lang('auth.join_us_description') @auth @else<span style="font-size:12px;" class="text-danger">[@lang('auth.login_first')]</span>@endauth</h4>
								    </div>
								</div>
							</div>
						</div>
					</div>
                    @else
                    <div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
								</div>
								<form enctype="multipart/form-data" method="post" class="form border p-5" action="{{route('join.store')}}" id="joinForm" novalidate="novalidate">
									@csrf
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input class="w-100" required name="name" id="name" type="text" value="{{old('name')}}" placeholder="Enter your name">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input class="w-100" required name="email" type="email" value="{{old('email')}}" id="email" placeholder="Enter email address">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input class="w-100" required id="phone" name="phone" value="{{old('phone')}}" type="number" placeholder="Enter your phone">
                                                @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label for="City">City<span>*</span></label>
                                                <select name="city" id="City" class="w-100" value="{{old('city')}}">
                                                    <option value="">Select your city</option>
                                                    <option value="Cairo">Cairo</option>
                                                    <option value="Sharm">Sharm</option>
                                                </select>
                                                @error('city')
                                                <span class="text-danger mx-2">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>your CV<span>*</span></label>
												<input required class="p-0 h-100 lh-base" name="cv" type="file" value="{{old('cv')}}">
                                                @error('cv')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<input type="submit" class="btn" name="submit" id="" value="Send">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
                            <div class="single-head p-5">
                                @php
                                    $settings=DB::table('settings')->get()->first();
                                @endphp
								<div class="single-info">
                                    <div class="title">
                                    	<img src="{{ $settings->logo }}" alt="">
								    </div>
								</div>
								<div class="single-info">
                                    <div class="title">
                                    	<h3>Join us</h3>
									    <h4>Join our team and become a Part of our big organization @auth @else<span style="font-size:12px;" class="text-danger">[You need to login first]</span>@endauth</h4>
								    </div>
								</div>
							</div>
						</div>
					</div>
                    @endif
				</div>
			</div>
	</section>
	<!--/ End Contact -->
@endsection

@push('styles')
<style>
	.modal-dialog .modal-content .modal-header{
		position:initial;
		padding: 10px 20px;
		border-bottom: 1px solid #e9ecef;
	}
	.modal-dialog .modal-content .modal-body{
		height:100px;
		padding:10px 20px;
	}
	.modal-dialog .modal-content {
		width: 50%;
		border-radius: 0;
		margin: auto;
	}
</style>
@endpush
@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush
