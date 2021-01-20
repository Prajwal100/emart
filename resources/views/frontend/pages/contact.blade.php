@extends('frontend.layouts.master')

@section('content')



    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
                <h6 class="banner-title">Contact</h6>
            </div>
        </div>
    </div>


    <section class="contact-page pt-50 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info d-flex mt-30">
                        <div class="contact-icon">
                            <i class="lni lni-map"></i>
                        </div>
                        <div class="contact-contant media-body">
                            <p class="text">888 6th 10001 Oakwood <br> Avenue, New York City, NY</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info d-flex mt-30">
                        <div class="contact-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-contant media-body">
                            <p class="text">212-631-5135 </p>
                            <p class="text">212-631-5135 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info d-flex mt-30">
                        <div class="contact-icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="contact-contant media-body">
                            <p class="text"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                               data-cfemail="4330222f263003262e2231376d202c2e">[email&#160;protected]</a> </p>
                            <p class="text"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                               data-cfemail="7e0d0b0e0e110c0a3e1b131f0c0a501d1113">[email&#160;protected]</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <form id="contact-form" action="assets/contact.php">
                <div class="contact-form pt-50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-form clearfix">
                                <input type="text" name="name" placeholder="Full Name">
                            </div>
                            <div class="single-form clearfix">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div class="single-form clearfix">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form">
                                <textarea name="message" placeholder="Massage"></textarea>
                            </div>
                        </div>
                        <p class="form-message"></p>
                        <div class="col-lg-12">
                            <div class="single-form">
                                <button class="main-btn">Send Massage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <div class="contact-map">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>


@endsection
