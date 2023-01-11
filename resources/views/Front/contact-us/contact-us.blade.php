@extends('layout.front.index')
@section('title', 'Contact us')

@section('content')
<!-- MAIN -->
<div id="main" class="theme-clearfix" role="document" style="margin-top: 80px;margin-bottom: 80px">
    <div class="breadcrumbs theme-clearfix">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a id="home" href="home_style_2.html">Home</a>
                    <span class="go-page"></span>
                </li>

                <li class="active">
                    <span>Contact us 1</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_gmaps_widget wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_map_wraper">
                                                    <iframe width="100%" height="304px" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d211642.2952567641!2d-118.41173249999999!3d34.020498899999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA!5e0!3m2!1sen!2s!4v1402372564534" class="scrolloff"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid contact-bonus contact-bonus1 margin-top-20">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">

                                    @if(app()->getLocale() == 'ar')
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper text-right" dir="auto">
                                                <div class="page-title text-right" dir="auto">
                                                    <h3>@lang('auth.contact_information_title')</h3>
                                                </div>

                                                <p class=" text-right" dir="auto">
                                                    @lang('auth.contact_information_description')
                                                </p>
                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper text-right" dir="auto">
                                                <style>
                                                    .ct{
                                                        padding-right: 30px !important;
                                                    }
                                                    .ct-street,.ct-email,.ct-hotline{
                                                        background-position: right !important;
                                                    }
                                                    .social{
                                                        text-align: end;
                                                    }
                                                </style>
                                                <p class="ct ct-street">
                                                    @lang('auth.contact_location')
                                                </p>

                                                <p class="ct ct-email">@lang('auth.contact_email') : support@test.com</p>

                                                <p class="ct ct-hotline">@lang('auth.contact_hotline') : 0123456789</p>
                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper social">
                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="facebook">
                                                        <i class="fa fa fa-facebook"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="twitter">
                                                        <i class="fa fa fa-twitter"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="Rss">
                                                        <i class="fa fa fa-rss"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="youtube">
                                                        <i class="fa fa fa-youtube"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="google plus">
                                                        <i class="fa fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class="page-title">
                                                    <h3>@lang('auth.contact_information_title')</h3>
                                                </div>

                                                <p>
                                                    @lang('auth.contact_information_description')
                                                </p>
                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p class="ct ct-street">
                                                    @lang('auth.contact_location')
                                                </p>

                                                <p class="ct ct-email">@lang('auth.contact_email') : support@test.com</p>

                                                <p class="ct ct-hotline">@lang('auth.contact_hotline') : 0123456789</p>
                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="facebook">
                                                        <i class="fa fa fa-facebook"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="twitter">
                                                        <i class="fa fa fa-twitter"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="Rss">
                                                        <i class="fa fa fa-rss"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="youtube">
                                                        <i class="fa fa fa-youtube"></i>
                                                    </a>
                                                </div>

                                                <div id="socials" class="socials-style5">
                                                    <a href="#" title="google plus">
                                                        <i class="fa fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            @if ($message = Session::get('status'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @endif
                                            @if (app()->getLocale() == "ar")
                                            <div class="wpb_wrapper">
                                                <div class="page-title text-right">
                                                    <h3>@lang('auth.contact_send_your_comment')</h3>
                                                </div>
                                            </div>
                                            @else
                                            <div class="wpb_wrapper">
                                                <div class="page-title">
                                                    <h3>@lang('auth.contact_send_your_comment')</h3>
                                                </div>
                                            </div>
                                            @endif
                                        </div>

                                        <div role="form" class="wpcf7" id="wpcf7-f715-p641-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            @if (app()->getLocale() == "ar")
                                            <form action="{{route('contact.store')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                                                @csrf
                                                <p class="border-dashed text-right" style="width:100%">
                                                    <span dir="auto" class="wpcf7-form-control-wrap your-name">
                                                        @lang('auth.input_name') :
                                                        <input  type="text" name="name"
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false" />
                                                    </span>
                                                   <br>
                                                   @error('name')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class="border-dashed text-right" style="width:100%">
                                                    <span dir="auto"  class="wpcf7-form-control-wrap your-email text-right">
                                                        @lang('auth.input_email') :
                                                        <input type="email" name="email"
                                                            value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                            aria-required="true" aria-invalid="false" />
                                                    </span>
                                                    <br>
                                                    @error('email')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class="border-dashed text-right" style="width:100%">
                                                    <span dir="auto"  class="wpcf7-form-control-wrap your-subject text-right">
                                                        @lang('auth.input_subject') :
                                                        <input type="text" name="subject"
                                                            value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text"
                                                            aria-invalid="false" />
                                                    </span>
                                                    <br>
                                                    @error('subject')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class=" text-right"> @lang('auth.input_message') :<br />
                                                    <span class="wpcf7-form-control-wrap your-message text-right">
                                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                            aria-invalid="false"></textarea>
                                                    </span>
                                                    @error('message')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br />
                                                    <input type="submit" value="@lang('auth.input_submit')"
                                                        class="wpcf7-form-control wpcf7-submit" />
                                                </p>
                                            </form>
                                            @else
                                            <form action="{{route('contact.store')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                                                @csrf
                                                <p class="border-dashed" style="width:100%">
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        @lang('auth.input_name') :
                                                        <input type="text" name="name"
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false" />
                                                    </span>
                                                   <br>
                                                   @error('name')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class="border-dashed" style="width:100%">
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        @lang('auth.input_email') :
                                                        <input type="email" name="email"
                                                            value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                            aria-required="true" aria-invalid="false" />
                                                    </span>
                                                    <br>
                                                    @error('email')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class="border-dashed" style="width:100%">
                                                    <span class="wpcf7-form-control-wrap your-subject">
                                                        @lang('auth.input_subject') :
                                                        <input type="text" name="subject"
                                                            value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text"
                                                            aria-invalid="false" />
                                                    </span>
                                                    <br>
                                                    @error('subject')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class=""> @lang('auth.input_message') :<br />
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                            aria-invalid="false"></textarea>
                                                    </span>
                                                    @error('message')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br />
                                                    <input type="submit" value="@lang('auth.input_submit')"
                                                        class="wpcf7-form-control wpcf7-submit" />
                                                </p>
                                            </form>
                                            @endif
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
<!-- END MAIN -->
@endsection
