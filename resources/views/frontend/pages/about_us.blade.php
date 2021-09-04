@extends('frontend.layouts.master')

@section('content')


    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>About Us</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- About Us Area -->
    <section class="about_us_area section_padding_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about_us_content pb-5 pb-lg-0">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset($about->image)}}" alt="about us">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about_us_content pl-0 pl-lg-5">
                        <h5>{{$about->heading}}</h5>
                        <p>{!! nl2br($about->content) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area -->

    <!-- Features Area -->
    <section class="features-area mb-50">
        <div class="container">
            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-ssl-security"></i>
                        <h5>Secure Payment Gateway</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-badge"></i>
                        <h5>Quality Products</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-fast-delivery"></i>
                        <h5>Fast Delivery</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-cash-on-delivery"></i>
                        <h5>Cash On Delivery</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-gift"></i>
                        <h5>Free Delivery</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-life-bouy"></i>
                        <h5>Customer Support</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cool Facts Area -->
    <section class="about_us_one cool_facts_area section_padding_100_70 bg-overlay jarallax" style="background-image: url(img/bg-img/deals.jpg);">
        <div class="container">
            <div class="row">
                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="cool_fact_text text-center wow fadeInUp" data-wow-delay="0.2s">
                        <h2><span class="counter">{{$about->experience}}</span>+</h2>
                        <h5>Years of experience</h5>
                    </div>
                </div>
                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="cool_fact_text text-center wow fadeInUp" data-wow-delay="0.4s">
                        <h2><span class="counter">{{$about->happy_customer}}</span>+</h2>
                        <h5>Happy Customer</h5>
                    </div>
                </div>
                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="cool_fact_text text-center wow fadeInUp" data-wow-delay="0.6s">
                        <h2><span class="counter">{{$about->team_advisor}}</span>+</h2>
                        <h5>Team Advisor</h5>
                    </div>
                </div>
                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="cool_fact_text text-center wow fadeInUp" data-wow-delay="0.8s">
                        <h2><span class="counter">{{$about->return_customer}}</span>%</h2>
                        <h5>Return Customer</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cool Facts Area End -->

    <!-- Popular Brands Area -->
    @if(count($brands)>0)
        <section class="popular_brands_area py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="popular_section_heading mb-50">
                            <h5>Popular Brands</h5>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="popular_brands_slide owl-carousel">
                            @foreach($brands as $item)
                                <div class="single_brands">
                                    <img src="{{asset($item->photo)}}" alt="{{$item->title}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Popular Brands Area -->

@endsection

