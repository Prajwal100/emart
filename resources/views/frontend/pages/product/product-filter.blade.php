<div class="shop_grid_product_area" id="product-update">
    <p>Total products : {{$products->total()}}</p>
    <div class="row justify-content-center">
    @if(count($products)>0)
        @foreach($products as $item)

            <!-- Single Product -->
                <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="{{$item->photo}}" alt="{{$item->photo}}">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>{{$item->conditions}}</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$item->id}}" id="add_to_wishlist_{{$item->id}}"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="#" data-quantity="1" data-product-id="{{$item->id}}" class="add_to_cart" id="add_to_cart{{$item->id}}"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <p class="brand_name">Top</p>
                            <a href="{{route('product.detail',$item->slug)}}">{{ucfirst($item->title)}}</a>
                            <h6 class="product-price">${{number_format($item->offer_price,2)}} <small><del class="text-danger">${{number_format($item->price,2)}}</del></small></h6>

                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No product found!</p>
        @endif

    </div>
    {{$products->appends($_GET)->links('vendor.pagination.custom')}}

</div>
