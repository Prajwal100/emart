@foreach($products as $product)
    <div class="col-lg-3 col-md-6">
        <div class="product-card text-center mt-30">
            <div class="product-image">
                @php
                    $photo=explode(',',$product->photo);

                @endphp
                <img src="{{$photo[0]}}" alt="product">
                <div class="sticker new">
                    @if($product->conditions=='new')
                        <span>New</span>

                    @endif
                </div>
                <div class="sticker new">
                    @if($product->conditions=='new')
                        <span>New</span>

                    @endif
                </div>
            </div>
            <div class="product-content">
                <h5 class="product-name"><a href="product-details.html">{{$product->title}}</a></h5>
                <span class="price">${{number_format($product->offer_price,2)}} <small><del>${{number_format($product->price,2)}}</del></small></span>
                <ul class="actions">
                    <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                class="lni lni-eye"></i></a></li>
                    <li><a href="#"><i class="lni lni-heart"></i></a></li>
                    <li><a href="" class="add_to_cart" data-product_id="{{$product->id}}" data-product_qty="1" id="add_to_cart{{$product->id}}"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endforeach


@section('scripts')

    <script>
        $(document).on('click','.add_to_cart',function(e){
            e.preventDefault();
            var product_id=$(this).data('product_id');
            var product_qty=$(this).data('product_qty');
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
                    $('#add_to_cart'+product_id).html('<i class="fa fa-spinner fa-spin"></i>');
                },
                complete:function () {
                    $('#add_to_cart'+product_id).html('<i class="fas fa-cart-plus"></i>');
                },
                success:function (data) {
                   if(data['success']){
                       $('body #cart-counter').html(data['cart_count']);
                       $('body #header-ajax').html(data['header']);
                       swal("Good job!", "Item successfully added to cart", "success");
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
@endsection
