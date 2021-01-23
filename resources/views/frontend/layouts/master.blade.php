<!doctype html>
<html lang="en">

<head>

  @include('frontend.layouts.head')
</head>

<body>
<div class="row">
    <div class="col-12">
        @include('backend.layouts.notification')
    </div>
</div>
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header-area" id="header-ajax">
    @include('frontend.layouts.header')
</header>
@include('frontend.layouts.nav')

@yield('content')

@include('frontend.layouts.footer')


<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered product-quick-view" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <a class="modal-close" href="#" data-dismiss="modal" aria-label="Close"><i
                        class="lni lni-close"></i></a>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8 col-sm-8">
                        <div class="product-details-image mt-30">
                            <div class="details-image">
                                <div class="single-product-image">
                                    <img src="frontend/assets/images/product-single-1.jpg" alt="product">
                                </div>
                                <div class="single-product-image">
                                    <img src="frontend/assets/images/product-single-2.jpg" alt="product">
                                </div>
                                <div class="single-product-image">
                                    <img src="frontend/assets/images/product-single-3.jpg" alt="product">
                                </div>
                                <div class="single-product-image">
                                    <img src="frontend/assets/images/product-single-4.jpg" alt="product">
                                </div>
                                <div class="single-product-image">
                                    <img src="frontend/assets/images/product-single-5.jpg" alt="product">
                                </div>
                                <div class="single-product-image">
                                    <img src="frontend/assets/images/product-single-3.jpg" alt="product">
                                </div>
                            </div>
                            <ul class="product-thumbs">
                                <li>
                                    <div class="single-thumbs">
                                        <img src="frontend/assets/images/product-single-1.jpg" alt="thumbs">
                                    </div>
                                </li>
                                <li>
                                    <div class="single-thumbs">
                                        <img src="frontend/assets/images/product-single-2.jpg" alt="thumbs">
                                    </div>
                                </li>
                                <li>
                                    <div class="single-thumbs">
                                        <img src="frontend/assets/images/product-single-3.jpg" alt="thumbs">
                                    </div>
                                </li>
                                <li>
                                    <div class="single-thumbs">
                                        <img src="frontend/assets/images/product-single-4.jpg" alt="thumbs">
                                    </div>
                                </li>
                                <li>
                                    <div class="single-thumbs">
                                        <img src="frontend/assets/images/product-single-5.jpg" alt="thumbs">
                                    </div>
                                </li>
                                <li>
                                    <div class="single-thumbs">
                                        <img src="frontend/assets/images/product-single-3.jpg" alt="thumbs">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details-content mt-25">
                            <h3 class="details-title">Proin Lectus Ipsum</h3>
                            <div class="details-price-rating d-sm-flex justify-content-between align-items-center">
                                <div class="price">
                                    <span class="price-text">$122.00 <del>$140.00</del></span>
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
                                <p class="text">There are many variations of passages of Lorem Ipsum avaable, b
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. make an ami jani nab
                                    majority have suffered alteration in some form, variations of passages Lorem
                                    Ipsum avaable, b majority</p>
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
        </div>
    </div>
</div>






@include('frontend.layouts.script')
<script>
    $(document).on('click','.cart_delete',function(e){
        e.preventDefault();
        var cart_id=$(this).data('id');
        var token="{{csrf_token()}}";
        var path="{{route('cart.delete')}}";

        $.ajax({
            url:path,
            type:"POST",
            dataType:"JSON",
            data:{
                cart_id:cart_id,
                _token:token,
            },
            success:function (data) {
                if(data['success']){
                    $('body #cart-counter').html(data['cart_count']);
                    $('body #header-ajax').html(data['header']);
                    swal("Good job!", "Cart successfully deleted", "success");
                }
                else{
                    swal("Sorry!","Something went wrong, Please try again","error");
                }
            },
            error:function (err) {
                swal("Sorry!",err,"error");
            }
        })
    })
</script>
</body>

</html>
