@extends('frontend.layouts.master')

@section('content')



    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single Product</li>
                </ol>
                <h6 class="banner-title">Single Product</h6>
            </div>
        </div>
    </div>


    <section class="product-details-area pt-30 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-8">
                    <div class="product-details-image mt-50">
                        <div class="details-image">
                            @php
                                $photos=explode(',',$productDetail->photo);
                            @endphp
                            @foreach($photos as $photo)
                                <div class="single-product-image">
                                    <img src="{{$photo}}" alt="product">
                                </div>
                            @endforeach

                        </div>
                        <ul class="product-thumbs">
                            @php
                                $photos=explode(',',$productDetail->photo);
                            @endphp
                            @foreach($photos as $photo)
                                <li>
                                    <div class="single-thumbs">
                                        <img src="{{$photo}}" alt="thumbs">
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-details-content mt-45">
                        <h3 class="details-title">{{$productDetail->title}}</h3>
                        <div class="details-price-rating d-sm-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="price-text">${{number_format($productDetail->offer_price,2)}} <del>${{number_format($productDetail->price,2)}} </del></span>
                            </div>
                            <div class="rating d-flex">
                                <ul>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                </ul>
                                <span class="rating-text">(01 Customer Review)</span>
                            </div>
                        </div>
                        <div class="details-overview">
                            <div class="details-sub-title">
                                <h4 class="sub-title">Quick Overview</h4>
                            </div>
                            <p class="text">{{$productDetail->summary}}</p>
                        </div>
                        <div class="details-size">
                            <div class="details-sub-title">
                                <h4 class="sub-title">Select Size</h4>
                            </div>
                            <ul class="size-itesms">
                                <li><a href="#">s</a></li>
                                <li><a class="active" href="#">m</a></li>
                                <li><a href="#">l</a></li>
                                <li><a href="#">xl</a></li>
                            </ul>
                        </div>
                        <div class="details-cart d-sm-flex align-items-center">
                            <div class="product-quantity d-flex mt-10 mr-20" id="quantity">
                                <button type="button" id="sub" class="sub">-</button>
                                <input type="text" id="1" value="0" />
                                <button type="button" id="add" class="add">+</button>
                            </div>
                            <div class="cart=btn mt-10">
                                <a class="main-btn" href="#"><i class="lni lni-cart-full"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="details-usefull">
                            <ul class="usefull-link">
                                <li><a href="#"><i class="lni lni-envelope"></i>Email to a Friend</a></li>
                                <li><a href="#"><i class="lni lni-heart"></i>Wishlist</a></li>
                                <li><a href="#"><i class="lni lni-printer"></i>print</a></li>
                            </ul>
                        </div>
                        <div class="details-share d-flex align-items-center">
                            <span class="share">Share:</span>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-tab-area pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab">
                        <div class="product-tab-menu">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="description-tab" data-toggle="tab" href="#description"
                                       role="tab" aria-controls="description" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                       aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a id="information-tab" data-toggle="tab" href="#information" role="tab"
                                       aria-controls="information" aria-selected="false">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tags-tab" data-toggle="tab" href="#tags" role="tab" aria-controls="tags"
                                       aria-selected="false">Tags</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-tab-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                     aria-labelledby="description-tab">
                                    <div class="single-tab-content description-tabs">
                                        <h3 class="tab-title">{{$productDetail->title}}</h3>
                                        <p class="text">{!! html_entity_decode($productDetail->description) !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="single-tab-content reviews-tabs">
                                        <div class="customer-review">
                                            <div class="review-title pb-10">
                                                <h4 class="title">CUSTOMER REVIEW</h4>
                                            </div>
                                            <ul class="product-comments">
                                                <li>
                                                    <div class="single-review d-sm-flex">
                                                        <div class="review-author">
                                                            <img src="assets/images/review-1.jpg" alt="Author">
                                                        </div>
                                                        <div class="review-content media-body">
                                                            <h6 class="author-name">Gerald Barnes</h6>
                                                            <span class="date">27 Jun, 2016 at 2:30pm</span>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Integer accumsan egestas elese ifend.
                                                                Phasellus a felis at est bibendum feugiat ut eget eni
                                                                Praesent et messages in con sectetur posuere dolor non.
                                                            </p>
                                                            <div class="comment-reply">
                                                                <ul>
                                                                    <li><a href="#"><i class="lni lni-reply"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="lni lni-close"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-review d-sm-flex">
                                                        <div class="review-author">
                                                            <img src="assets/images/review-2.jpg" alt="Author">
                                                        </div>
                                                        <div class="review-content media-body">
                                                            <h6 class="author-name">Gerald Barnes</h6>
                                                            <span class="date">27 Jun, 2016 at 2:30pm</span>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Integer accumsan egestas elese ifend.
                                                                Phasellus a felis at est bibendum feugiat ut eget eni
                                                                Praesent et messages in con sectetur posuere dolor non.
                                                            </p>
                                                            <div class="comment-reply">
                                                                <ul>
                                                                    <li><a href="#"><i class="lni lni-reply"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="lni lni-close"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-form mt-30">
                                            <div class="review-title">
                                                <h4 class="title">LEAVE YOUR REVIW</h4>
                                            </div>
                                            <form action="#">
                                                <div class="single-form">
                                                    <div class="your-rating">
                                                        <p class="text">Your Rating</p>
                                                        <span>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                        </span>
                                                        <span class="separator">|</span>
                                                        <span>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                        </span>
                                                        <span class="separator">|</span>
                                                        <span>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                        </span>
                                                        <span class="separator">|</span>
                                                        <span>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                        </span>
                                                        <span class="separator">|</span>
                                                        <span>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                            <a href="#"><i class="lni lni-star"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <input type="text" placeholder="Your name here...">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <input type="text" placeholder="Your name here...">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-form">
                                                            <textarea placeholder="Your review here..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-form">
                                                            <button class="main-btn">Submit Review</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="information" role="tabpanel"
                                     aria-labelledby="information-tab">
                                    <div class="single-tab-content information-tabs">
                                        <h3 class="tab-title">PRODUCT INFORMATION</h3>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                            accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut
                                            eget eni Praesent et messages in con sectetur posuere dolor non. <br>Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                            elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent
                                            et messages in con sectetur posuere dolor non. <br> Lorem ipsum dolor sit
                                            amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend.
                                            Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages
                                            in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                                    <div class="single-tab-content tags-tabs">
                                        <h3 class="tab-title">TAGS</h3>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                            accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut
                                            eget eni Praesent et messages in con sectetur posuere dolor non. <br>Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                            elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent
                                            et messages in con sectetur posuere dolor non. <br> Lorem ipsum dolor sit
                                            amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend.
                                            Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages
                                            in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
