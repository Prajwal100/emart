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
            <a href="javascript:void(0);" data-quantity="1" data-price="{{$product->offer_price}}" data-product-id="{{$product->id}}" class="add_to_cart" id="add_to_cart{{$product->id}}"><i class="icofont-shopping-cart"></i> Add to Cart</a>
        </div>

        <!-- Quick View -->
        <div class="product_quick_view">
            <a href="javascript:void(0);" data-toggle="modal" data-target="#quickview{{$product->id}}"><i class="icofont-eye-alt"></i> Quick View</a>
        </div>

        <p class="brand_name">{{\App\Models\Brand::where('id',$product->brand_id)->value('title')}}</p>
        <a href="{{route('product.detail',$product->slug)}}">{{ucfirst($product->title)}}</a>
        <h6 class="product-price">${{number_format($product->offer_price,2)}} <small><del class="text-danger">${{number_format($product->price,2)}}</del></small></h6>

    </div>
</div>


{{--  <!-- Quick View Modal Area -->--}}
<div class="modal fade" id="quickview{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true" data-backdrop="false" style="background:rgba(0,0,0,.5);z-index: 999999999999;">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close" style="border: 1px solid #d6e6fb !important;
              box-shadow: none !important;
              position: absolute !important;
              width: 30px;
              height: 30px;
              border-radius: 50%;
              right: 15px !important;
              text-align: center;
              top: 10px;
              z-index: 9;
              line-height: 28px;">
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
