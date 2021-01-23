@extends('frontend.layouts.master')

@section('content')


    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
                <h6 class="banner-title">Shopping Cart</h6>
            </div>
        </div>
    </div>


    <section class="shopping-cart-area pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="title">Shopping Cart</h3>
                        <p class="text pt-15">Shopping cart-Checkout-Order complete</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping-table table-responsive mt-50" id="cart_append">
                        @include('frontend.layouts._cart')
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')

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
                    console.log(data['cart_append']);
                    if(data['success']){
                        $('body #cart-counter').html(data['cart_count']);
                        $('body #cart_append').html(data['cart_append']);
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


@endsection
