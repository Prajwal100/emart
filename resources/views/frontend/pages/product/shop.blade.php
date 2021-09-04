@extends('frontend.layouts.master')

@section('content')
    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Shop Grid</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Shop Grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <section class="shop_grid_area section_padding_100">
        <div class="container">
            <form action="{{route('shop.filter')}}" method="post">
                @csrf
                <div class="row">

                    <div class="col-12 col-sm-5 col-md-4 col-lg-3">

                        <div class="shop_sidebar_area">
                            @if(count($cats)>0)
                                <!-- Single Widget -->
                                    <div class="widget catagory mb-30">
                                        <h6 class="widget-title">Product Categories</h6>
                                        <div class="widget-desc">
                                            @if(!empty($_GET['category']))
                                                @php
                                                    $filter_cats=explode(',',$_GET['category']);
                                                @endphp
                                            @endif
                                        @foreach($cats as $cat)
                                            <!-- Single Checkbox -->
                                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                                    <input type="checkbox" @if(!empty($filter_cats) && in_array($cat->slug,$filter_cats)) checked @endif class="custom-control-input" id="{{$cat->slug}}" name="category[]" onchange="this.form.submit();" value="{{$cat->slug}}">
                                                    <label class="custom-control-label" for="{{$cat->slug}}">{{ucfirst($cat->title)}} <span class="text-muted">({{count($cat->products)}})</span></label>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                            @endif
                            <!-- Single Widget -->
                                <div class="widget price mb-30">
                                   <div class="d-flex">
                                       <h6 class="widget-title">Filter by Price</h6>
                                   </div>

                                    <div class="widget-desc">
                                        <div class="slider-range">
                                            <div id="slider-range" data-min="{{Helper::minPrice()}}" data-max="{{Helper::maxPrice()}}" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="{{Helper::minPrice()}}" data-value-max="{{Helper::maxPrice()}}" data-label-result="Price:">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            </div>
                                           <div class="d-flex mt-2">
                                               @if(!empty($_GET['price']))
                                                   @php

                                                    $price=explode('-',$_GET['price'])

                                                   @endphp
                                               @endif
                                               <input type="hidden" id="price_range" value="@if(!empty($_GET['price'])) {{$_GET['price']}} @endif" name="price_range">
                                               <input style="border:0;width:60%;" type="text" readonly id="amount" value="$@if(!empty($_GET['price'])) {{$price[0]}} @else {{Helper::minPrice()}}  @endif - $@if(!empty($_GET['price'])) {{$price[1]}} @else {{Helper::maxPrice()}}  @endif">
{{--                                               <div class="range-price" id="amount">Price: {{Helper::minPrice()}} - {{Helper::maxPrice()}}</div>--}}
                                               <button type="submit" class="btn btn-sm btn-primary float-right" style=" margin: 12px 0px 12px 0px;height: 30px; line-height: 22px;">Filter</button>

                                           </div>
                                        </div>
                                    </div>
                                </div>
                                @if(count($brands)>0)
                                    <!-- Single Widget -->
                                    <div class="widget brands mb-30">
                                    <h6 class="widget-title">Filter by brands</h6>
                                    <div class="widget-desc">
                                    @if(!empty($_GET['brand']))
                                        @php
                                            $filter_brands=explode(',',$_GET['brand']);
                                        @endphp
                                    @endif
                                        <!-- Single Checkbox -->
                                        @foreach($brands as $brand)
                                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                                <input type="checkbox" @if(!empty($filter_brands) && in_array($brand->slug,$filter_brands)) checked @endif class="custom-control-input" id="{{$brand->slug}}" name="brand[]" value="{{$brand->slug}}" onchange="this.form.submit();">
                                                <label class="custom-control-label" for="{{$brand->slug}}">{{$brand->title}} <span class="text-muted">({{count($brand->products)}})</span></label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                @endif
                                <!-- Single Widget -->
                                <div class="widget rating mb-30">
                                    <h6 class="widget-title">Average Rating</h6>
                                    <div class="widget-desc">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span class="text-muted">(103)</span></a></li>

                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(78)</span></a></li>

                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(47)</span></a></li>

                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(9)</span></a></li>

                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(3)</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Single Widget -->
                                <div class="widget size mb-30">
                                    <h6 class="widget-title">Filter by Size</h6>
                                    <div class="widget-desc">
                                        <!-- Single Checkbox -->
                                        <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11" @if(!empty($_GET['size']) && $_GET['size']=='S') checked @endif name="size" value="S" onchange="this.form.submit();">
                                            <label class="custom-control-label" for="customCheck11">Small <span class="text-muted">({{\App\Models\Product::where(['status'=>'active','size'=>"S"])->count()}})</span></label>
                                        </div>
                                        <!-- Single Checkbox -->
                                        <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12" @if(!empty($_GET['size']) && $_GET['size']=='M') checked @endif name="size" value="M" onchange="this.form.submit();">
                                            <label class="custom-control-label" for="customCheck12">Medimu <span class="text-muted">({{\App\Models\Product::where(['status'=>'active','size'=>"M"])->count()}})</span></label>
                                        </div>
                                        <!-- Single Checkbox -->
                                        <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13" @if(!empty($_GET['size']) && $_GET['size']=='L') checked @endif name="size" value="L" onchange="this.form.submit();">
                                            <label class="custom-control-label" for="customCheck13">Large <span class="text-muted">({{\App\Models\Product::where(['status'=>'active','size'=>"L"])->count()}})</span></label>
                                        </div>
                                        <!-- Single Checkbox -->
                                        <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck14" @if(!empty($_GET['size']) && $_GET['size']=='XL') checked @endif name="size" value="XL" onchange="this.form.submit();">
                                            <label class="custom-control-label" for="customCheck14">Extra Large <span class="text-muted">({{\App\Models\Product::where(['status'=>'active','size'=>"XL"])->count()}})</span></label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>

                    <div class="col-12 col-sm-7 col-md-8 col-lg-9">
                        <!-- Shop Top Sidebar -->
                        <div class="shop_top_sidebar_area d-flex flex-wrap align-items-center justify-content-between">
                            <div class="view_area d-flex">
                                <div class="grid_view">
                                    <a href="shop-grid-left-sidebar.html" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="icofont-layout"></i></a>
                                </div>
                                <div class="list_view ml-3">
                                    <a href="shop-list-left-sidebar.html" data-toggle="tooltip" data-placement="top" title="List View"><i class="icofont-listine-dots"></i></a>
                                </div>
                            </div>
                            <select name="sortBy" onchange="this.form.submit();" class="small right">
                                <option value=" ">Default Sort</option>
                                <option value="priceAsc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceAsc') selected @endif>Price - Lower To Higher</option>
                                <option value="priceDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceDesc') selected @endif>Price - Higher To Lower</option>
                                <option value="titleAsc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleAsc') selected @endif>Alphabetical Ascending</option>
                                <option value="titleDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleDesc') selected @endif>Alphabetical Descending</option>
                                <<option value="discAsc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='discAsc') selected @endif>Discount - Lower To Higher</option>
                                <option value="discDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='discDesc') selected @endif>Discount - Higher To Lower</option>
                            </select>
                        </div>

                        <div class="shop_grid_product_area" id="product-update">
                            <p>Total products : {{$products->total()}}</p>
                            <div class="row justify-content-center">
                                @if(count($products)>0)
                                    @foreach($products as $product)
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        @include('frontend.layouts._single-product',['product'=>$product])
                                        </div>

                                    @endforeach
                                @else
                                    <p>No product found!</p>
                                @endif

                            </div>
                            {{$products->appends($_GET)->links('vendor.pagination.custom')}}

                        </div>


                    </div>
                </div>
            </form>

        </div>
    </section>

@endsection

@section('scripts')

{{--    Price slider--}}

<script>

    $(document).ready(function(){
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;

            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }
            let price=price_range.split('-');

            $('#slider-range').slider({
                range:true,
                min:min_value,
                max:max_value,
                values:price,
                slide:function(event,ui){
                    $('#amount').val('$'+ui.values[0]+"-"+'$'+ui.values[1]);
                    $('#price_range').val(ui.values[0]+"-"+ui.values[1]);
                }

            })

        }
    });
</script>


    {{--Add to cart--}}

    <script>
        $(document).on('click','.add_to_cart',function(e){
            e.preventDefault();
            var product_id=$(this).data('product-id');
            var product_qty=$(this).data('quantity');

            var token="{{csrf_token()}}";
            var path="{{route('cart.store')}}";

            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    product_id:product_id,
                    product_qty:product_qty,
                    _token:token,
                },
                beforeSend:function () {
                    $('#add_to_cart'+product_id).html('<i class="fa fa-spinner fa-spin"></i> Loading....');
                },
                complete:function () {
                    $('#add_to_cart'+product_id).html('<i class="fa fa-cart-plus"></i> Add to Cart');
                },
                success:function (data) {
                    console.log(data);

                    if(data['status']){
                        $('body #header-ajax').html(data['header']);
                        $('body #cart_counter').html(data['cart_count']);
                        swal({
                            title: "Good job!",
                            text: data['message'],
                            icon: "success",
                            button: "OK!",
                        });

                    }
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });
    </script>

    {{--Add to wishlist--}}
    <script>
        $(document).on('click','.add_to_wishlist',function(e){
            e.preventDefault();
            var product_id=$(this).data('id');
            var product_qty=$(this).data('quantity');

            var token="{{csrf_token()}}";
            var path="{{route('wishlist.store')}}";

            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    product_id:product_id,
                    product_qty:product_qty,
                    _token:token,
                },
                beforeSend:function () {
                    $('#add_to_wishlist_'+product_id).html('<i class="fa fa-spinner fa-spin"></i>');
                },
                complete:function () {
                    $('#add_to_wishlist_'+product_id).html('<i class="fas fa-heart"></i> Add to Cart');
                },
                success:function (data) {
                    console.log(data);

                    if(data['status']){
                        $('body #header-ajax').html(data['header']);
                        $('body #wishlist_counter').html(data['wishlist_count']);
                        swal({
                            title: "Good job!",
                            text: data['message'],
                            icon: "success",
                            button: "OK!",
                        });

                    }
                    else if(data['present']){
                        $('body #header-ajax').html(data['header']);
                        $('body #wishlist_counter').html(data['wishlist_count']);
                        swal({
                            title: "Opps!",
                            text: data['message'],
                            icon: "warning",
                            button: "OK!",
                        });
                    }
                    else{
                        swal({
                            title: "Sorry!",
                            text: "You can't add that product",
                            icon: "error",
                            button: "OK!",
                        });
                    }
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });
    </script>

@endsection
