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
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class="page-title">
                                                    <h3>Information</h3>
                                                </div>

                                                <p>
                                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                    <br/>
                                                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                                </p>
                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p class="ct ct-street">
                                                    123 Suspendis mattis, Sollicitudin District,
                                                    <br/>
                                                    Accums Fringilla
                                                </p>

                                                <p class="ct ct-email">Email : support@test.com</p>

                                                <p class="ct ct-hotline">Hotline : 0123456789</p>
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
                                </div>
                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class="page-title">
                                                    <h3>Send your comments</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div role="form" class="wpcf7" id="wpcf7-f715-p641-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="{{route('store')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                                                @csrf
                                                <p class="border-dashed text-right" style="width:100%">
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input type="text" name="name"
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-right"
                                                            aria-required="true" aria-invalid="false" />
                                                    </span>
                                                   : الاسم
                                                   <br>
                                                   @error('name')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class="border-dashed text-right" style="width:100%">
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input type="email" name="email"
                                                            value="" size="40"
                                                            class="wpcf7-form-control text-right wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                            aria-required="true" aria-invalid="false" />
                                                    </span>
                                                    : الايمل
                                                    <br>
                                                    @error('email')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class="border-dashed text-right" style="width:100%">
                                                    <span class="wpcf7-form-control-wrap your-subject">
                                                        <input type="text" name="subject"
                                                            value="" size="40"
                                                            class="wpcf7-form-control text-right wpcf7-text"
                                                            aria-invalid="false" />
                                                    </span>
                                                    : الموضوع
                                                    <br>
                                                    @error('subject')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </p>

                                                <p class=" text-right">التعليق  :<br />
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control text-right wpcf7-textarea"
                                                            aria-invalid="false"></textarea>
                                                    </span>
                                                    @error('message')
                                                        <span class=" invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br />
                                                    <input type="submit" value="ارسل الايميل"
                                                        class="wpcf7-form-control wpcf7-submit" />
                                                </p>
                                            </form>
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
