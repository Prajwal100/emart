@extends('frontend.layouts.master')

@section('content')

    @if(count($banners)>0)
        <!-- Welcome Slides Area -->

        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide -->
                @foreach($banners as $banner)
                    <div class="single_slide bg-img" style="background-image: url({{$banner->photo}});">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="welcome_slide_text">
                                        <h2 class="text-white" data-animation="fadeInUp"
                                            data-delay="300ms">{{$banner->title}}</h2>
                                        <h4 class="text-white" data-animation="fadeInUp"
                                            data-delay="600ms">{!! html_entity_decode($banner->description) !!}</h4>
                                        <a href="{{$banner->slug}}" class="btn btn-primary" data-animation="fadeInUp"
                                           data-delay="900ms">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <!-- Welcome Slides Area -->
    @endif

    @if(count($categories)>0)
        <!-- Top Catagory Area -->
        <div class="top_catagory_area mt-50 clearfix">
            <div class="container">
                <div class="row">
                    <!-- Single Catagory -->
                    @foreach($categories as $cat)

                        <div class="col-12 col-md-4">
                            <div class="single_catagory mt-50">
                                <a href="{{route('product.category',$cat->slug)}}">
                                    <img src="{{asset($cat->photo)}}" alt="{{$cat->title}}">
                                    <div class="single_cata_desc d-flex align-items-center justify-content-center">
                                        <div class="single_cata_desc_text">
                                            <h5>{{ucfirst($cat->title)}}</h5>
                                            <a href="{{route('product.category',$cat->slug)}}">Shop Now <i
                                                    class="icofont-rounded-double-right"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        <!-- Top Catagory Area -->
    @endif

    @if(count($new_products)>0)
        <!-- New Arrivals Area -->
        <section class="new_arrivals_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="popular_section_heading mb-50 text-center">
                            <h5>New Arrivals</h5>
                        </div>
                    </div>
                </div>

                <div class="row">

                        @foreach($new_products as $nproduct)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                @include('frontend.layouts._single-product',['product'=>$nproduct])
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- New Arrivals Area -->
    @endif

    <!-- Featured Products Area -->
    <section class="featured_product_area">
        <div class="container">
            <div class="row">
                <!-- Featured Offer Area -->
                <div class="col-12 col-lg-6">
                    <div class="featured_offer_area d-flex align-items-center"
                         style="background-image: url({{asset($promo_banner->photo)}});">
                        <div class="featured_offer_text">
                            <h2>{!! nl2br($promo_banner->description) !!}</h2>
                            <h4>{{$promo_banner->title}}</h4>
                            <a href="{{$promo_banner->slug}}" class="btn btn-primary btn-sm mt-3">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Product Area -->
                <div class="col-12 col-lg-6">
                    <div class="section_heading featured">
                        <h5>Featured Products</h5>
                    </div>

                    <!-- Featured Product Slides -->
                    <div class="featured_product_slides owl-carousel">
                        <!-- Single Product -->
                        @foreach($featured_products as $product)
                            <!-- Single Product -->
                                <div class="single-product-area mb-30">
                                    <div class="product_image">
                                    @php
                                        $photo=explode(',',$product->photo);
                                    @endphp
                                    <!-- Product Image -->
                                        <img class="normal_img" src="{{asset($photo[0])}}" alt="">
                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span>{{$product->conditions}}</span>
                                        </div>

                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$product->id}}" id="add_to_wishlist_{{$product->id}}"><i class="icofont-heart"></i></a>
                                        </div>

                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="javascript:void(0);" class="add_to_compare" data-id="{{$product->id}}" id="add_to_compare_{{$product->id}}"><i class="icofont-exchange"></i></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#" data-quantity="1" data-price="{{$product->offer_price}}" data-product-id="{{$product->id}}" class="add_to_cart" id="add_to_cart{{$product->id}}"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                                        </div>

                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview{{$product->id}}"><i class="icofont-eye-alt"></i> Quick View</a>
                                        </div>

                                        <p class="brand_name">{{\App\Models\Brand::where('id',$product->brand_id)->value('title')}}</p>
                                        <a href="{{route('product.detail',$product->slug)}}">{{ucfirst($product->title)}}</a>
                                        <h6 class="product-price">${{number_format($product->offer_price,2)}} <small><del class="text-danger">${{number_format($product->price,2)}}</del></small></h6>

                                    </div>
                                </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Products Area -->

    <!-- Best Rated/Onsale/Top Sale Product Area -->
    @if(count($best_sellings)>0 || count($best_rated)>0)
    <section class="best_rated_onsale_top_sellares section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs_area">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="product-tab">
                            <li class="nav-item">
                                <a href="#top-sellers" class="nav-link " data-toggle="tab" role="tab">Top Selling Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="#best-rated" class="nav-link active" data-toggle="tab" role="tab">Best
                                    Rated</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="top-sellers">
                                <div class="top_sellers_area">
                                    <div class="row">
                                        @foreach($best_sellings as $product)
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    @php
                                                        $photo=explode(',',$product->photo);
                                                    @endphp
                                                    <img src="{{asset($photo[0])}}" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5>{{ucfirst($product->title)}}</h5>
                                                    <h6>{{Helper::currency_converter($product->offer_price)}} <span>{{Helper::currency_converter($product->price)}}</span></h6>
                                                    <div class="top_seller_product_rating">
                                                        @for($i=0; $i<5; $i++)
                                                            @if(round($product->reviews->avg('rate'))>$i)
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            @else
                                                                <i class="far fa-star" aria-hidden="true"></i>
                                                            @endif
                                                        @endfor
                                                    </div>

                                                    <!-- Info -->
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <!-- Add to cart -->
                                                        <div class="ts_product_add_to_cart">
                                                            <a href="javascript:;" data-quantity="1" data-price="{{$product->offer_price}}" data-product-id="{{$product->id}}" class="add_to_cart" id="add_to_cart{{$product->id}}" data-toggle="tooltip" data-placement="top"
                                                               title="Add To Cart"><i
                                                                    class="icofont-shopping-cart"></i></a>
                                                        </div>

                                                        <!-- Wishlist -->
                                                        <div class="ts_product_wishlist">
                                                            <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$product->id}}" id="add_to_wishlist_{{$product->id}}" data-toggle="tooltip"
                                                               data-placement="top" title="Wishlist"><i
                                                                    class="icofont-heart"></i></a>
                                                        </div>

                                                        <!-- Compare -->
                                                        <div class="ts_product_compare">
                                                            <a href="javascript:void(0);" class="add_to_compare" data-id="{{$product->id}}" id="add_to_compare_{{$product->id}}" data-toggle="tooltip"
                                                               data-placement="top" title="Compare"><i
                                                                    class="icofont-exchange"></i></a>
                                                        </div>

                                                        <!-- Quick View -->
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal" data-target="#quickview{{$product->id}}"><i
                                                                    class="icofont-eye-alt"></i></a>
                                                        </div>

                                                        {{--  <!-- Quick View Modal Area -->--}}
                                                        <div class="modal fade" id="quickview{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true" data-backdrop="false" style="background:rgba(0,0,0,.5);z-index: 999999999999;">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <div class="modal-body">
                                                                        <div class="quickview_body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-lg-5">
                                                                                        <div class="quickview_pro_img">
                                                                                            @php
                                                                                                $photo=explode(',',$product->photo)
                                                                                            @endphp
                                                                                            <img class="first_img" src="{{asset($photo[0])}}" alt="{{$product->title}}">
                                                                                            @if($product->discount>0)
                                                                                                <div class="product_badge">
                                                                                                    <span>{{$product->discount}}%</span>
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-lg-7">
                                                                                        <div class="quickview_pro_des">
                                                                                            <h4 class="title">{{ucfirst($product->title)}}</h4>
                                                                                            <div class="top_seller_product_rating mb-15">
                                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                            </div>
                                                                                            <h5 class="price">$120.99 <span>$130</span></h5>
                                                                                            <p>{!! html_entity_decode($product->summary) !!}</p>
                                                                                            <a href="{{route('product.detail',$product->slug)}}">View Full Product Details</a>
                                                                                        </div>
                                                                                        <!-- Add to Cart Form -->
                                                                                        <div class="cart" >
                                                                                            <div class="quantity">
                                                                                                <input  data-id="{{$product->id}}" type="number" class="qty-text" id="qty" step="1" min="1" max="12"
                                                                                                        name="quantity" value="1">
                                                                                            </div>
                                                                                            <button type="submit" name="addtocart" data-product_id="{{$product->id}}" data-quantity="1" data-price="{{$product->offer_price}}" id="add_to_cart_button_details_{{$product->id}}" value="5" class="add_to_cart_button_details  cart-submit">Add to
                                                                                                cart
                                                                                            </button>
                                                                                            <!-- Wishlist -->
                                                                                            <div class="modal_pro_wishlist">
                                                                                                <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$product->id}}" id="add_to_wishlist_{{$product->id}}"><i class="icofont-heart"></i></a>
                                                                                            </div>
                                                                                            <!-- Compare -->
                                                                                            <div class="modal_pro_compare">
                                                                                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- Share -->
                                                                                        <div class="share_wf mt-30">
                                                                                            <p>Share with friends</p>
                                                                                            <div class="_icon">
                                                                                                <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->facebook()->getRawLinks()}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                                                                                <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->twitter()->getRawLinks()}}"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                                                                                <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->linkedin()->getRawLinks()}}"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                                                                                <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->whatsapp()->getRawLinks()}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
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
                                                        {{--                                <!-- Quick View Modal Area -->--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade show active" id="best-rated">
                                <div class="best_rated_area">
                                    <div class="row">
                                        @foreach($best_rated as $product)
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="single_top_sellers">
                                                    <div class="top_seller_image">
                                                        @php
                                                            $photo=explode(',',$product->photo);
                                                        @endphp
                                                        <img src="{{asset($photo[0])}}" alt="Top-Sellers">
                                                    </div>
                                                    <div class="top_seller_desc">
                                                        <h5>{{ucfirst($product->title)}}</h5>
                                                        <h6>{{Helper::currency_converter($product->offer_price)}} <span>{{Helper::currency_converter($product->price)}}</span></h6>
                                                        <div class="top_seller_product_rating">
                                                            @for($i=0; $i<5; $i++)
                                                                @if(round($product->reviews->avg('rate'))>$i)
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                @else
                                                                    <i class="far fa-star" aria-hidden="true"></i>
                                                                @endif
                                                            @endfor
                                                        </div>

                                                        <!-- Info -->
                                                        <div
                                                            class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                            <!-- Add to cart -->
                                                            <div class="ts_product_add_to_cart">
                                                                <a href="javascript:;" data-quantity="1" data-price="{{$product->offer_price}}" data-product-id="{{$product->id}}" class="add_to_cart" id="add_to_cart{{$product->id}}" data-toggle="tooltip" data-placement="top"
                                                                   title="Add To Cart"><i
                                                                        class="icofont-shopping-cart"></i></a>
                                                            </div>

                                                            <!-- Wishlist -->
                                                            <div class="ts_product_wishlist">
                                                                <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$product->id}}" id="add_to_wishlist_{{$product->id}}" data-toggle="tooltip"
                                                                   data-placement="top" title="Wishlist"><i
                                                                        class="icofont-heart"></i></a>
                                                            </div>

                                                            <!-- Compare -->
                                                            <div class="ts_product_compare">
                                                                <a href="javascript:void(0);" class="add_to_compare" data-id="{{$product->id}}" id="add_to_compare_{{$product->id}}" data-toggle="tooltip"
                                                                   data-placement="top" title="Compare"><i
                                                                        class="icofont-exchange"></i></a>
                                                            </div>

                                                            <!-- Quick View -->
                                                            <div class="ts_product_quick_view">
                                                                <a href="#" data-toggle="modal" data-target="#quickview{{$product->id}}"><i
                                                                        class="icofont-eye-alt"></i></a>
                                                            </div>

                                                            {{--  <!-- Quick View Modal Area -->--}}
                                                            <div class="modal fade" id="quickview{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true" data-backdrop="false" style="background:rgba(0,0,0,.5);z-index: 999999999999;">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        <div class="modal-body">
                                                                            <div class="quickview_body">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-lg-5">
                                                                                            <div class="quickview_pro_img">
                                                                                                @php
                                                                                                    $photo=explode(',',$product->photo)
                                                                                                @endphp
                                                                                                <img class="first_img" src="{{asset($photo[0])}}" alt="{{$product->title}}">
                                                                                                @if($product->discount>0)
                                                                                                    <div class="product_badge">
                                                                                                        <span>{{$product->discount}}%</span>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-lg-7">
                                                                                            <div class="quickview_pro_des">
                                                                                                <h4 class="title">{{ucfirst($product->title)}}</h4>
                                                                                                <div class="top_seller_product_rating mb-15">
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                                                </div>
                                                                                                <h5 class="price">$120.99 <span>$130</span></h5>
                                                                                                <p>{!! html_entity_decode($product->summary) !!}</p>
                                                                                                <a href="{{route('product.detail',$product->slug)}}">View Full Product Details</a>
                                                                                            </div>
                                                                                            <!-- Add to Cart Form -->
                                                                                            <div class="cart" >
                                                                                                <div class="quantity">
                                                                                                    <input  data-id="{{$product->id}}" type="number" class="qty-text" id="qty" step="1" min="1" max="12"
                                                                                                            name="quantity" value="1">
                                                                                                </div>
                                                                                                <button type="submit" name="addtocart" data-product_id="{{$product->id}}" data-quantity="1" data-price="{{$product->offer_price}}" id="add_to_cart_button_details_{{$product->id}}" value="5" class="add_to_cart_button_details  cart-submit">Add to
                                                                                                    cart
                                                                                                </button>
                                                                                                <!-- Wishlist -->
                                                                                                <div class="modal_pro_wishlist">
                                                                                                    <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$product->id}}" id="add_to_wishlist_{{$product->id}}"><i class="icofont-heart"></i></a>
                                                                                                </div>
                                                                                                <!-- Compare -->
                                                                                                <div class="modal_pro_compare">
                                                                                                    <a href="compare.html"><i class="icofont-exchange"></i></a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- Share -->
                                                                                            <div class="share_wf mt-30">
                                                                                                <p>Share with friends</p>
                                                                                                <div class="_icon">
                                                                                                    <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->facebook()->getRawLinks()}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                                                                                    <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->twitter()->getRawLinks()}}"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                                                                                    <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->linkedin()->getRawLinks()}}"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                                                                                    <a target="_blank" href="{{\Jorenvh\Share\ShareFacade::currentPage()->whatsapp()->getRawLinks()}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
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
                                                            {{--                                <!-- Quick View Modal Area -->--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Rated/Onsale/Top Sale Product Area -->
    @endif
    <!-- Weekly Deals Area -->
{{--    <section class="weekly_deals_area home-3 section_padding_100 jarallax bg-overlay"--}}
{{--             style="background-image: url(img/bg-img/deals.jpg);">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="weekly_deals_content text-center">--}}
{{--                        <h3>Deals of the Week</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--                        <div class="weekly_deals_timer mt-30">--}}
{{--                            <ul data-countdown="2022/07/25 23:00:00">--}}
{{--                                <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->--}}
{{--                                <li><span class="days">00</span>days</li>--}}
{{--                                <li><span class="hours">00</span>hours</li>--}}
{{--                                <li><span class="minutes">00</span>min</li>--}}
{{--                                <li><span class="seconds">00</span>sec</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Weekly Deals Area -->

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

    <!-- Special Featured Area -->
    <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-ship"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Free Shipping</h6>
                            <p>For orders above $100</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-box"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Happy Returns</h6>
                            <p>7 Days free Returns</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-money"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>100% Money Back</h6>
                            <p>If product is damaged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-live-support"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Dedicated Support</h6>
                            <p>We provide support 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Featured Area -->

@endsection

@section('scripts')

@endsection
