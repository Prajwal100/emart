<!doctype html>
<html lang="en">

<head>
   @include('frontend.layouts.head')
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<!-- Header Area -->
<header class="header_area" id="header-ajax">
    @include('frontend.layouts.header')
</header>

@yield('content')

<!-- Footer Area -->
@include('frontend.layouts.footer')
<!-- Footer Area -->

@include('frontend.layouts.script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function () {
        var path="{{route('autosearch')}}";
        $('#search_text').autocomplete({
            source:function (request,response) {
                $.ajax({
                    url:path,
                    dataType:"JSON",
                    data:{
                        term:request.term
                    },
                    success:function (data) {
                        response(data);
                    }
                });
            },
            minLength:1,
        });

    });
</script>
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

<script>
    function currency_change(currency_code) {
        $.ajax({
            type:'POST',
            url:'{{route('currency.load')}}',
            data:{
                currency_code:currency_code,
                _token: '{{csrf_token()}}',
            },
            success:function (response) {
                if(response['status']){
                    location.reload();
                }
                else{
                    alert('server error');
                }
            }
        })
    }
</script>


{{--Add to cart--}}
<script>
    $(document).on('click', '.add_to_cart', function (e) {
        e.preventDefault();
        var product_id = $(this).data('product-id');
        var product_qty = $(this).data('quantity');
        var product_price = $(this).data('price');
        var token = "{{csrf_token()}}";
        var path = "{{route('cart.store')}}";

        $.ajax({
            url: path,
            type: "POST",
            dataType: "JSON",
            data: {
                product_id: product_id,
                product_qty: product_qty,
                product_price: product_price,
                _token: token,
            },
            beforeSend: function () {
                $('#add_to_cart' + product_id).html('<i class="fa fa-spinner fa-spin"></i> Loading....');
            },
            complete: function () {
                $('#add_to_cart' + product_id).html('<i class="fa fa-cart-plus"></i> Add to Cart');
            },
            success: function (data) {
                console.log(data);

                if (data['status']) {
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
            error: function (err) {
                console.log(err);
            }
        });
    });
</script>

{{--Add to wishlist--}}
<script>
    $(document).on('click', '.add_to_wishlist', function (e) {
        e.preventDefault();
        var product_id = $(this).data('id');
        var product_qty = $(this).data('quantity');

        var token = "{{csrf_token()}}";
        var path = "{{route('wishlist.store')}}";

        $.ajax({
            url: path,
            type: "POST",
            dataType: "JSON",
            data: {
                product_id: product_id,
                product_qty: product_qty,
                _token: token,
            },
            beforeSend: function () {
                $('#add_to_wishlist_' + product_id).html('<i class="fa fa-spinner fa-spin"></i>');
            },
            complete: function () {
                $('#add_to_wishlist_' + product_id).html('<i class="fas fa-heart"></i>');
            },
            success: function (data) {
                console.log(data);

                if (data['status']) {
                    $('body #header-ajax').html(data['header']);
                    $('body #wishlist_counter').html(data['wishlist_count']);
                    swal({
                        title: "Good job!",
                        text: data['message'],
                        icon: "success",
                        button: "OK!",
                    });

                } else if (data['present']) {
                    $('body #header-ajax').html(data['header']);
                    $('body #wishlist_counter').html(data['wishlist_count']);
                    swal({
                        title: "Opps!",
                        text: data['message'],
                        icon: "warning",
                        button: "OK!",
                    });
                } else {
                    swal({
                        title: "Sorry!",
                        text: "You can't add that product",
                        icon: "error",
                        button: "OK!",
                    });
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
</script>

<script>
    $('.qty-text ').change('key up',function () {
        var id=$(this).data('id');
        var spinner=$(this),input=spinner.closest('div.quantity').find('input[type="number"]');
        var newVal=parseFloat(input.val());
        $('#add_to_cart_button_details_'+id).attr('data-quantity',newVal);

    });

    $('.add_to_cart_button_details').on('click',function () {
        var product_qty=$(this).data('quantity');
        var product_id=$(this).data('product_id');
        var product_size=$(this).data('size');
        var product_price=$(this).data('price');
        var token="{{csrf_token()}}";
        var path="{{route('cart.store')}}";

        $.ajax({
            url:path,
            type:"POST",
            data:{
                _token:token,
                product_id:product_id,
                product_size:product_size,
                product_price:product_price,
                product_qty:product_qty,
            },
            beforeSend:function () {
                $('#add_to_cart_button_details_'+ product_id).html('<i class="fas fa-spinner fa-spin"></i> Loading...');

            },
            complete:function () {
                $('#add_to_cart_button_details_'+ product_id).html('Add To Cart');
            },
            success:function (data) {
                $('body #header-ajax').html(data['header']);
                $('body #cart_counter').html(data['cart_count']);
                // swal({
                //     title: "Good job!",
                //     text: data['message'],
                //     icon: "success",
                //     button: "OK!",
                // });

                window.location.href=window.location.href;

            },
            error:function (err) {
                console.log(err);
            }
        });
    });
</script>

{{--Add to compare--}}
<script>
    $(document).on('click', '.add_to_compare', function (e) {
        e.preventDefault();
        var product_id = $(this).data('id');
        var token = "{{csrf_token()}}";
        var path = "{{route('compare.store')}}";

        $.ajax({
            url: path,
            type: "POST",
            dataType: "JSON",
            data: {
                product_id: product_id,
                _token: token,
            },
            beforeSend: function () {
                $('#add_to_compare_' + product_id).html('<i class="fa fa-spinner fa-spin"></i>');
            },
            complete: function () {
                $('#add_to_compare_' + product_id).html('<i class="icofont-exchange"></i>');
            },
            success: function (data) {
                console.log(data);

                if (data['status']) {
                    $('body #header-ajax').html(data['header']);
                    $('body #compare_counter').html(data['compare_count']);
                    swal({
                        title: "Good job!",
                        text: data['message'],
                        icon: "success",
                        button: "OK!",
                    });

                } else if (data['present']) {
                    $('body #header-ajax').html(data['header']);
                    $('body #compare_counter').html(data['compare_count']);
                    swal({
                        title: "Opps!",
                        text: data['message'],
                        icon: "warning",
                        button: "OK!",
                    });
                } else {
                    swal({
                        title: "Sorry!",
                        text: data['message'],
                        icon: "error",
                        button: "OK!",
                    });
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
</script>


</body>

</html>
