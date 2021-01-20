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
    <section class="feature-categories-area pt-50">
        <div class="container">
            <div class="row">

                @foreach($categories as $cat)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature-categories mt-30">
                            <div class="feature-categories-image">
                                <img src="{{$cat->photo}}" alt="feature categories">
                            </div>
                            <div class="feature-categories-content text-center">
                                <div class="categories-content">
                                    <h3 class="categories-title">{{$cat->title}}</h3>
                                    <p class="text">{{$cat->summary}}</p>
                                </div>
                                <div class="categories-btn">
                                    <a class="main-btn" href="{{route('product.category',$cat->slug)}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif


    <section class="new-arrivals-area pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">New Arrivals</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-1.jpg" alt="product">
                            <div class="sticker new">
                                <span>New</span>
                            </div>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">Qui Ratione Volup</a></h5>
                            <span class="price">$49.00</span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-2.jpg" alt="product">
                            <div class="sticker discount">
                                <span>-40%</span>
                            </div>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">Eius Modi Tempo</a></h5>
                            <span class="price">$59.00</span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-3.jpg" alt="product">
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">Quia Voluptas Sit</a></h5>
                            <span class="price">$49.00 <del>$79.00</del></span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-4.jpg" alt="product">
                            <div class="sticker sale">
                                <span>sale</span>
                            </div>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">An Tium Lores Eos</a></h5>
                            <span class="price">$49.00</span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-5.jpg" alt="product">
                            <div class="sticker sale">
                                <span>sale</span>
                            </div>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">Qui Ratione Volup</a></h5>
                            <span class="price">$69.00 </span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-6.jpg" alt="product">
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">Natur Aut Odit Aut</a></h5>
                            <span class="price">$49.00 <del>$79.00</del></span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-7.jpg" alt="product">
                            <div class="sticker new">
                                <span>New</span>
                            </div>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">Nisi Ut Aliqu</a></h5>
                            <span class="price">$49.00</span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card text-center mt-30">
                        <div class="product-image">
                            <img src="frontend/assets/images/product-1.jpg" alt="product">
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="product-details.html">Beatae Vitae Dicta</a></h5>
                            <span class="price">$49.00</span>
                            <ul class="actions">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                            class="lni lni-eye"></i></a></li>
                                <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="discount-product-area bg_cover pt-125 pb-130"
             style="background-image: url(frontend/assets/images/dsc-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="discount-product-content text-center">
                        <p class="text">Best Bargains</p>
                        <h2 class="main-title">Exclusive Deals of This Season!</h2>
                        <a href="#" class="main-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-products-area pt-70 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Featured Products</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-11 col-sm-11 col-10">
                    <div class="row featured-products-active">
                        <div class="col-lg-3">
                            <div class="product-card text-center mt-30 mb-30">
                                <div class="product-image">
                                    <img src="frontend/assets/images/product-7.jpg" alt="product">
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">Natur Aut Odit Aut</a></h5>
                                    <span class="price">$49.00</span>
                                    <ul class="actions">
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="lni lni-eye"></i></a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                        <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-card text-center mt-30 mb-30">
                                <div class="product-image">
                                    <img src="frontend/assets/images/product-8.jpg" alt="product">
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">Beatae Vitae Dicta</a></h5>
                                    <span class="price">$49.00</span>
                                    <ul class="actions">
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="lni lni-eye"></i></a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                        <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-card text-center mt-30 mb-30">
                                <div class="product-image">
                                    <img src="frontend/assets/images/product-12.jpg" alt="product">
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">Qui Ratione Volup</a></h5>
                                    <span class="price">$49.00</span>
                                    <ul class="actions">
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="lni lni-eye"></i></a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                        <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-card text-center mt-30 mb-30">
                                <div class="product-image">
                                    <img src="frontend/assets/images/product-4.jpg" alt="product">
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">An Tium Lores Eos</a></h5>
                                    <span class="price">$49.00</span>
                                    <ul class="actions">
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="lni lni-eye"></i></a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                        <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-card text-center mt-30 mb-30">
                                <div class="product-image">
                                    <img src="frontend/assets/images/product-5.jpg" alt="product">
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">Magni Dolores Eos</a></h5>
                                    <span class="price">$49.00</span>
                                    <ul class="actions">
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="lni lni-eye"></i></a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                        <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-card text-center mt-30 mb-30">
                                <div class="product-image">
                                    <img src="frontend/assets/images/product-10.jpg" alt="product">
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">Natur Aut Odit Aut</a></h5>
                                    <span class="price">$49.00</span>
                                    <ul class="actions">
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="lni lni-eye"></i></a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                        <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content-area bg_cover pt-85 pb-90" style="background-image: url(frontend/assets/images/bg1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-text">
                        <h3 class="content-title">Multi-vendor eCommerce Template</h3>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem,
                            ducimus reprehenderit sed molestiae iure sapiente accusamus incidunt minima expedita velit
                            assumenda vitae libero. Eaque nostrum magni architecto, corporis doloremque!</p>
                        <a href="#" class="main-btn">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area pt-35 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-users"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Multi-vendor eCommerce</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-display"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Clean Design</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-cart-full"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">100+ eCommerce Elements</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Included Business Pages</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-mobile"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Fully Responsive</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-ruler-pencil"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Cutting-edge Features</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-cog"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Completely Customizable</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-rocket"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Fast and Well-optimized</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-40">
                        <div class="services-icon">
                            <i class="lni lni-headphone-alt"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Rich Doc and Support</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper
                                elit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-area pt-80 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="testimonial-active">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-image">
                                <img src="frontend/assets/images/testimonial-1.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p class="text">“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro
                                    neque a nam nulla quos atque reprehenderit eius corrupti amet! hic et quidem.
                                    Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                                <h5 class="testimonial-name">Jonathan Beri</h5>
                                <span>- Web Developer</span>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-image">
                                <img src="frontend/assets/images/testimonial-2.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p class="text">“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro
                                    neque a nam nulla quos atque reprehenderit eius corrupti amet! hic et quidem.
                                    Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                                <h5 class="testimonial-name">Cadic Vegeta</h5>
                                <span>- Graphic Design</span>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-image">
                                <img src="frontend/assets/images/testimonial-3.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p class="text">“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro
                                    neque a nam nulla quos atque reprehenderit eius corrupti amet! hic et quidem.
                                    Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                                <h5 class="testimonial-name">Jared Erondu</h5>
                                <span>- CEO & art director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Latest Blog</h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="frontend/assets/images/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <span class="date">16 April</span>
                            <h4 class="blog-title"><a href="blog-details.html">Where Trends Going Next</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In atque, qui cum
                                voluptatem quibusdam dolore veniam....</p>
                            <a href="blog-details.html" class="more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="frontend/assets/images/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <span class="date">16 April</span>
                            <h4 class="blog-title"><a href="blog-details.html">Ellie Goulding – High For This</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In atque, qui cum
                                voluptatem quibusdam dolore veniam....</p>
                            <a href="blog-details.html" class="more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="frontend/assets/images/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <span class="date">16 April</span>
                            <h4 class="blog-title"><a href="blog-details.html">Best Photography of 2022</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In atque, qui cum
                                voluptatem quibusdam dolore veniam....</p>
                            <a href="blog-details.html" class="more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

@endsection
