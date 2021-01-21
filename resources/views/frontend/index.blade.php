@extends('frontend.layouts.master')

@section('content')

    <section class="slider-area slider-active">
        @foreach($banners as $banner)

        <div class="single-slider bg_cover" style="background-image: url({{$banner->photo}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider-content">
                            <h5 class="sub-title" data-animation="fadeInDown" data-delay="0.3s">{{$banner->title}}</h5>
                            <p class="text" data-animation="fadeInLeft" data-delay="0.7s">{!! html_entity_decode($banner->description) !!}</p>
                            <a class="main-btn" data-animation="fadeInUp" data-delay="0.9s" href="{{$banner->slug}}"><i
                                    class="lni lni-cart"></i>Start Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </section>

    @if(count($categories)>0)
        <section class="collection_area pt-70">
        <div class="container-fluid">
            <div class="row">
                @foreach($categories as $cat)
                    <div class="col-lg-4">
                    <div class="single_collection bg_cover mt-30"
                         style="background-image: url({{$cat->photo}})">
                        <span class="sticker">New</span>
                        <div class="collection_content">
                            <h4 class="title"><a href="category.html">{{$cat->title}}</a></h4>
                            <p>{{$cat->summary}}</p>
                        </div>
                        <div class="View">
                            <a href="{{route('product.category',$cat->slug)}}">View Collection <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @php
    $popular_pro=DB::table('products')->where(['status'=>'active','conditions'=>'popular'])->orderBy('id','DESC')->limit(5)->get();
    @endphp

    @if(count($popular_pro)>0)
        <section class="collection_area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Popular Collection</h3>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row product_active">
                    @foreach($popular_pro as $product)
                        <div class="col-lg-3">
                            <div class="product_card_2 mt-30">
                                <div class="product_image">
                                    @php
                                    $photo=explode(',',$product->photo);
                                    @endphp
                                    <img src="{{$photo[0]}}" alt="product">
                                    <a href="#" class="main-btn">Add to Cart</a>
                                </div>
                                <div class="product_content text-center">
                                    <h4 class="title"><a href="{{route('product.detail',$product->slug)}}">{{$product->title}}</a></h4>
                                    <span class="price">${{number_format($product->offer_price,2)}} <small><del>${{number_format($product->price,2)}}</del></small></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    @php
        $winter_pro=DB::table('products')->where(['status'=>'active','conditions'=>'winter'])->orderBy('id','DESC')->limit(8)->get();
    @endphp

    @if(count($winter_pro)>0)
        <section class="top_product_area pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Winter Collection</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($winter_pro as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product_card_2 mt-30">
                        <div class="product_image">
                            @php
                                $photo=explode(',',$product->photo);
                            @endphp
                            <img src="{{$photo[0]}}" alt="product">
                            <a href="#" class="main-btn">Add to Cart</a>
                        </div>
                        <div class="product_content text-center">
                            <h4 class="title"><a href="product-details.html">{{$product->title}}</a></h4>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                            <span class="price">${{number_format($product->offer_price,2)}} <small><del>${{number_format($product->price,2)}}</del></small></span>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <section class="features_product_area pt-50">
        <div class="features_product_bg bg_cover" style="background-image: url(frontend/assets/images/features_product_bg.jpg)">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="features_product_title mt-20">
                        <h4 class="title">Featured Bundle</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore eirmod tempor.</p>
                        <a href="#" class="main-btn">View Details</a>
                    </div>
                    <div class="features_product_image mt-30">
                        <img src="frontend/assets/images/features_product-1.jpg" alt="features product">
                    </div>
                    <div class="features_product_image mt-30">
                        <img src="frontend/assets/images/features_product-2.jpg" alt="features product">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features_product_image mt-30">
                        <img src="frontend/assets/images/features_product-3.jpg" alt="">
                    </div>
                    <div class="features_product_image mt-30">
                        <img src="frontend/assets/images/features_product-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="client_area pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Client Says</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row client_active">
                <div class="col-lg-4">
                    <div class="single_client">
                        <i class="lni lni-quotation"></i>
                        <h5 class="name">Jichel HSidrh</h5>
                        <span class="sub_title">Product Designer</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore.Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy
                            eirmod tempor.</p>
                        <img src="frontend/assets/images/author-1.jpg" alt="author" class="author">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_client">
                        <i class="lni lni-quotation"></i>
                        <h5 class="name">Jichel HSidrh</h5>
                        <span class="sub_title">Product Designer</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore.Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy
                            eirmod tempor.</p>
                        <img src="frontend/assets/images/author-2.jpg" alt="author" class="author">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_client">
                        <i class="lni lni-quotation"></i>
                        <h5 class="name">Jichel HSidrh</h5>
                        <span class="sub_title">Product Designer</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore.Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy
                            eirmod tempor.</p>
                        <img src="frontend/assets/images/author-3.jpg" alt="author" class="author">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_client">
                        <i class="lni lni-quotation"></i>
                        <h5 class="name">Jichel HSidrh</h5>
                        <span class="sub_title">Product Designer</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore.Lorem ipsum dolor sit amet, consetetur sadip cinelitr, sed diam nonumy
                            eirmod tempor.</p>
                        <img src="frontend/assets/images/author-3.jpg" alt="author" class="author">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="call_to_action_area bg_cover" style="background-image: url(frontend/assets/images/call_to_action.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="call_to_action_content">
                        <h2 class="sub_title">25% OFF</h2>
                        <h4 class="main_title">Black Friday Sale</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor labore
                            et dolore magna.</p>
                        <a href="#" class="main-btn">VIEW DEAL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_area pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Recent Blog Post</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single_blog_2 mt-30">
                        <div class="blog_image">
                            <img src="frontend/assets/images/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet consetetur</a></h4>
                            <p>Lorem ipsum dolor sit amet, conse sadip cinelitr, seddiam nonumy eirmod tempor dolor sit
                                amet, consetetur sadi.</p>
                            <a href="blog-details.html" class="more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog_2 mt-30">
                        <div class="blog_image">
                            <img src="frontend/assets/images/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet consetetur</a></h4>
                            <p>Lorem ipsum dolor sit amet, conse sadip cinelitr, seddiam nonumy eirmod tempor dolor sit
                                amet, consetetur sadi.</p>
                            <a href="blog-details.html" class="more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog_2 mt-30">
                        <div class="blog_image">
                            <img src="frontend/assets/images/blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet consetetur</a></h4>
                            <p>Lorem ipsum dolor sit amet, conse sadip cinelitr, seddiam nonumy eirmod tempor dolor sit
                                amet, consetetur sadi.</p>
                            <a href="blog-details.html" class="more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact_area pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Contact Now</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <form id="contact-form" action="assets/contact.php">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-form-2">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-form-2">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-form-2">
                            <input type="text" name="subject" placeholder="subject">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-form-2">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="col-lg-12">
                        <div class="single-form-2">
                            <button class="main-btn">SEND MESSAGE</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <div class="client-logo pt-80 pb-55">
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
