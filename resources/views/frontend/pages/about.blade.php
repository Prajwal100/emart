@extends('frontend.layouts.master')

@section('content')



    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
                <h6 class="banner-title">About</h6>
            </div>
        </div>
    </div>


    <section class="about-page pt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image pt-40">
                        <img src="frontend/assets/images/about.jpg" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-35">
                        <h4 class="about-title">WELCOME TO EMART</h4>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol in
                            reprehenderit in <br> <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dol in reprehenderit in ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dol in reprehenderit in</p>
                        <a href="#" class="main-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Meet The Members</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team mt-30">
                        <div class="team-image">
                            <img src="frontend/assets/images/team-1.jpg" alt="Team">
                        </div>
                        <div class="team-overlay">
                            <div class="team-content">
                                <h4 class="team-title">David Givens</h4>
                                <p class="text">Chief Technical Officer</p>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team mt-30">
                        <div class="team-image">
                            <img src="frontend/assets/images/team-2.jpg" alt="Team">
                        </div>
                        <div class="team-overlay">
                            <div class="team-content">
                                <h4 class="team-title">Cadic Vegeta</h4>
                                <p class="text">Graphic Designer</p>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team mt-30">
                        <div class="team-image">
                            <img src="frontend/assets/images/team-3.jpg" alt="Team">
                        </div>
                        <div class="team-overlay">
                            <div class="team-content">
                                <h4 class="team-title">Justyna Michallek</h4>
                                <p class="text">Buniness Manager</p>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="support-area pt-50 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-support mt-30">
                        <i class="lni lni-plane"></i>
                        <p class="text">Free Shipping Worldwide </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-support mt-30">
                        <i class="lni lni-headphone-alt"></i>
                        <p class="text">24/7 Customer Service </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-support mt-30">
                        <i class="lni lni-reload"></i>
                        <p class="text">Easy Return Policy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="client-logo client-logo-bg pt-80 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo-active">
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-01.png" alt="client Logo">
                        </div>
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-02.png" alt="client Logo">
                        </div>
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-03.png" alt="client Logo">
                        </div>
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-04.png" alt="client Logo">
                        </div>
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-05.png" alt="client Logo">
                        </div>
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-06.png" alt="client Logo">
                        </div>
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-07.png" alt="client Logo">
                        </div>
                        <div class="single-client-logo">
                            <img src="frontend/assets/images/client-08.png" alt="client Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
