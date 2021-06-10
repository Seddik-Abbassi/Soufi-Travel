@extends('layout.layout')

@section('content')


    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:600px;overflow:hidden;">
            <div>
                <img data-u="image" src="{{ asset('images/slider4.jpg') }}" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:130px;z-index:0;background-color:rgba(255,255,255,0.8);font-size:40px;font-weight:300;color:#000000;line-height:60px;padding:5px;box-sizing:border-box;">
                    @lang('message.slidermsg1')
                    @lang('message.slidermsg2')
                </div>
            </div>
            <div>
                <img data-u="image" src="{{ asset('images/slider3.jpg') }}" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:130px;z-index:0;background-color:rgba(255,255,255,0.8);font-size:40px;font-weight:300;color:#000000;line-height:60px;padding:5px;box-sizing:border-box;">
                    @lang('message.slidermsg1')
                    @lang('message.slidermsg2')
                </div>
                <div style="position:relative;top:400px;width:320px;height:130px;margin:0 auto;z-index:0;font-size:20px;color:#000000;line-height:38px;padding:5px;box-sizing:border-box;">
                    <a href="{{ url(app()->getLocale(),'bateaux') }}" class="btn btn-success" style="font-size: 0.6em !important;font-weight: bold">@lang('button.homebateau')</a>
                </div>
            </div>
            <div>
                <img data-u="image" src="{{ asset('images/slider1.jpg') }}" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:130px;z-index:0;background-color:rgba(255,255,255,0.8);font-size:40px;font-weight:300;color:#000000;line-height:60px;padding:5px;box-sizing:border-box;">
                    @lang('message.slidermsg1')
                    @lang('message.slidermsg2')
                </div>
                <div style="position:relative;top:400px;width:280px;height:130px;margin:0 auto;z-index:0;font-size:20px;color:#000000;line-height:38px;padding:5px;box-sizing:border-box;">
                    <a href="{{ url(app()->getLocale(),'footballcamps') }}" class="btn btn-success" style="font-size: 0.6em !important;font-weight: bold">@lang('button.homefootcump')</a>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>


<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>@lang('message.messagepertriptype')</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/business-trip.jpg" alt="Business Trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Business</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/plage-trip.jpg" alt="Plage trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Plage</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/sahara-trip.jpg" alt="Sahara trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Sahara</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/business-trip.jpg" alt="Business Trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Business</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/plage-trip.jpg" alt="Plage trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Plage</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/sahara-trip.jpg" alt="Sahara trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Sahara</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div id="fh5co-footcamp" class="fh5co-section-gray">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">--}}
{{--                    <h3>Nos Offres Football Camp</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach($footballcamps as $footballcamp )--}}
{{--                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">--}}
{{--                        <div href="#"><img src="{{ $footballcamp->thumbnail }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">--}}
{{--                            <div class="desc">--}}
{{--                                <span></span>--}}
{{--                                <h3>{{ $footballcamp->title }}</h3>--}}
{{--                                <span>{{ $footballcamp->begin_date }} -> {{ $footballcamp->end_date }}</span>--}}
{{--                                <span class="price">{{ $footballcamp->price }} TND</span>--}}
{{--                                <span style="font-weight: bold">{{ $footballcamp->destination }}</span>--}}
{{--                                <a class="btn btn-primary btn-outline" href="{{ route('footballcamp', $footballcamp->id) }}">Explorer<i class="icon-arrow-right22"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                <div class="col-md-12 text-center animate-box">--}}
{{--                    <p><a class="btn btn-primary btn-outline btn-lg" href="{{ route('footballcamps') }}">Tous les offres&nbsp;<i class="icon-arrow-right22"></i></a></p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <br><br><br><br>
<div id="fh5co-destination">
    <div class="tour-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul id="fh5co-destination-list" class="animate-box">
                    <li class="one-forth text-center" style="background-image: url(../images/place-1.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Los Angeles</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-2.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Hongkong</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-3.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Italy</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-4.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Philippines</h2>
                            </div>
                        </a>
                    </li>

                    <li class="one-forth text-center" style="background-image: url(../images/place-5.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Japan</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-half text-center">
                        <div class="title-bg">
                            <div class="case-studies-summary">
                                <h2>@lang('message.messagemostfamous')</h2>
                            </div>
                        </div>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-6.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Paris</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-7.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Singapore</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-8.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Madagascar</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-9.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Egypt</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-10.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Indonesia</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>@lang('message.titleclient')</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>
                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                </div>

            </div>
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                    </blockquote>
                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                </div>


            </div>
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>
                    <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
