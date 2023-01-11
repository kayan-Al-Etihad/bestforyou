@extends('layout.front.index')
@section('title', 'Contact us')

@section('content')
<!-- MAIN -->
<div id="main" class="theme-clearfix" role="document">

    <div class="container">
        <div class="row">
            <div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="vc_row wpb_row vc_row-fluid about-v1 about-us-1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner padding-right-15 padding-left-15">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>
                                                    <a href="">
                                                        <img class=" size-full wp-image-6490 alignleft" src="{{ asset('best/images/write-593333_1920.jpg') }}" alt="Shape-133" width="470" height="293" />
                                                    </a>
                                                </p>
                                                @if(app()->getLocale() == 'ar')
                                                <div class="page-title text-right" dir="auto">
                                                    <h2>@lang('auth.about_title')</h2>
                                                </div>

                                                <p class=" text-right" dir="auto">
                                                    @lang('auth.about_description1').
                                                </p>

                                                <p class=" text-right" dir="auto">
                                                    @lang('auth.about_description2').
                                                </p>
                                                @endif
                                                @if(app()->getLocale() == 'en')
                                                <div class="page-title">
                                                    <h2>@lang('auth.about_title')</h2>
                                                </div>

                                                <p>
                                                    @lang('auth.about_description1').
                                                </p>

                                                <p>
                                                    @lang('auth.about_description2').
                                                </p>v
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="vc_row wpb_row vc_row-fluid aboutv1-ourteam our-team-1" style="margin-top: 50px">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner no-padding-left-right">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class="page-title">
                                                    <h2 style="text-align: center;">@lang('auth.about_team')</h2>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="sw_ourteam_01" class="responsive-slider sw-ourteam-slider default clearfix" data-lg="4" data-md="4" data-sm="3" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                            <div class="title-home">
                                                <h2></h2>
                                            </div>

                                            <div class="resp-slider-container">
                                                <div class="row">
                                                    <div class="slider responsive">
                                                        <div class="item">
                                                            <div class="item-wrap">
                                                                <div class="item-img item-height">
                                                                    <div class="item-img-info">
                                                                        <img 	width="270" height="270" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                                                                src="{{ asset('best/images/team1.jpg') }}" />
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <h3>@lang('auth.about_team_title1')</h3>

                                                                    <div class="item-desc">
                                                                       @lang('auth.about_team_description1')
                                                                    </div>

                                                                    <div class="item-social">
                                                                        <div class="team-facebook">
                                                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        </div>

                                                                        <div class="team-twitter">
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        </div>

                                                                        <div class="team-gplus">
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                        </div>

                                                                        <div class="team-linkedin">
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        </div>
                                                                    </div>

                                                                    <ul class="au_contact">
                                                                        <li>
                                                                            <span class="fa fa-mobile-phone" style="font-size: 18px; position: relative; top: 4px;">&nbsp;</span>
                                                                            <a title="Call:0123-4567-8910" href="tel:+84123456789">0123-4567-8910</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-envelope" style="font-size: 11px; position: relative;">&nbsp;</span>
                                                                            <a title="maria@test.domain" href="mailto:maria@test.domain">maria@test.domain</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-skype" style="font-size: 16px; position: relative; top: 1px;">&nbsp;</span>test.skype
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-wrap">
                                                                <div class="item-img item-height">
                                                                    <div class="item-img-info">
                                                                        <img 	width="270" height="270" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                                                                src="{{ asset('best/images/team1.jpg') }}" />
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <h3>@lang('auth.about_team_title2')</h3>

                                                                    <div class="item-desc">
                                                                        @lang('auth.about_team_description2')
                                                                    </div>

                                                                    <div class="item-social">
                                                                        <div class="team-facebook">
                                                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        </div>

                                                                        <div class="team-twitter">
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        </div>

                                                                        <div class="team-gplus">
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                        </div>

                                                                        <div class="team-linkedin">
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        </div>
                                                                    </div>

                                                                    <ul class="au_contact">
                                                                        <li>
                                                                            <span class="fa fa-mobile-phone" style="font-size: 18px; position: relative; top: 4px;">&nbsp;</span>
                                                                            <a title="Call:0123-4567-8910" href="tel:+84123456789">0123-4567-8910</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-envelope" style="font-size: 11px; position: relative;">&nbsp;</span>
                                                                            <a title="maria@test.domain" href="mailto:maria@test.domain">maria@test.domain</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-skype" style="font-size: 16px; position: relative; top: 1px;">&nbsp;</span>test.skype
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-wrap">
                                                                <div class="item-img item-height">
                                                                    <div class="item-img-info">
                                                                        <img 	width="270" height="270"
                                                                                src="{{ asset('best/images/team1.jpg') }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""/>
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <h3>@lang('auth.about_team_title3')</h3>

                                                                    <div class="item-desc">
                                                                        @lang('auth.about_team_description3')
                                                                    </div>

                                                                    <div class="item-social">
                                                                        <div class="team-facebook">
                                                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        </div>

                                                                        <div class="team-twitter">
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        </div>

                                                                        <div class="team-gplus">
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                        </div>

                                                                        <div class="team-linkedin">
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        </div>
                                                                    </div>

                                                                    <ul class="au_contact">
                                                                        <li>
                                                                            <span class="fa fa-mobile-phone" style="font-size: 18px; position: relative; top: 4px;">&nbsp;</span>
                                                                            <a title="Call:0123-4567-8910" href="tel:+84123456789">0123-4567-8910</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-envelope" style="font-size: 11px; position: relative;">&nbsp;</span>
                                                                            <a title="maria@test.domain" href="mailto:maria@test.domain">maria@test.domain</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-skype" style="font-size: 16px; position: relative; top: 1px;">&nbsp;</span>test.skype
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-wrap">
                                                                <div class="item-img item-height">
                                                                    <div class="item-img-info">
                                                                        <img 	width="270" height="270" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                                                                src="{{ asset('best/images/team1.jpg') }}"/>
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <h3>@lang('auth.about_team_title4')</h3>

                                                                    <div class="item-desc">
                                                                        @lang('auth.about_team_description4')
                                                                    </div>

                                                                    <div class="item-social">
                                                                        <div class="team-facebook">
                                                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        </div>

                                                                        <div class="team-twitter">
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        </div>

                                                                        <div class="team-gplus">
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                        </div>

                                                                        <div class="team-linkedin">
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        </div>
                                                                    </div>

                                                                    <ul class="au_contact">
                                                                        <li>
                                                                            <span class="fa fa-mobile-phone" style="font-size: 18px; position: relative; top: 4px;">&nbsp;</span>
                                                                            <a title="Call:0123-4567-8910" href="tel:+84123456789">0123-4567-8910</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-envelope" style="font-size: 11px; position: relative;">&nbsp;</span>
                                                                            <a title="maria@test.domain" href="mailto:maria@test.domain">maria@test.domain</a>
                                                                        </li>

                                                                        <li>
                                                                            <span class="fa fa-skype" style="font-size: 16px; position: relative; top: 1px;">&nbsp;</span>test.skype
                                                                        </li>
                                                                    </ul>
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
                    </div>

                    <script type="text/javascript">
                        function submitform(){
                            if(document.commentform.comment.value=='' || document.commentform.author.value=='' || document.commentform.email.value==''){
                                alert('Please fill the required field.');
                                return false;
                            } else return true;
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN -->
@endsection
