@extends('frontend.layouts.master')

@section('main-content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Join us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
								</div>
								<form class=" form" method="post" action="{{route('contact.store')}}" id="contactForm" novalidate="novalidate">
									@csrf
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" id="name" type="text" placeholder="Enter your name">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" id="email" placeholder="Enter email address">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input id="phone" name="phone" type="number" placeholder="Enter your phone">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label for="City">City<span>*</span></label>
                                                <select name="city" id="City" class="w-100">
                                                    <option value="">Select your city</option>
                                                    <option value="Cairo">Cairo</option>
                                                    <option value="Sharm">Sharm</option>
                                                </select>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>your CV<span>*</span></label>
												<input class="p-0 h-100 lh-base" name="cv" type="file">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Send</button>
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
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	<!--================Contact Success  =================-->
	<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-success">Thank you!</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-success">Your message is successfully sent...</p>
			</div>
		  </div>
		</div>
	</div>

	<!-- Modals error -->
	<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-warning">Sorry!</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-warning">Something went wrong.</p>
			</div>
		  </div>
		</div>
	</div>
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
