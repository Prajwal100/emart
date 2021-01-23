@extends('frontend.layouts.master')

@section('content')



    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
                <h6 class="banner-title">Shop</h6>
            </div>
        </div>
    </div>


    <section class="category-page pt-40 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-filter d-sm-flex justify-content-between align-items-center">
                        <div class="filter pt-10">
                            <p class="text">Showing result of your search keyword "Dress"</p>
                        </div>
                        <div class="filter pt-10 d-flex align-items-center">
                            <span class="sort">Sort by:</span>
                            <form action="">
                                <select id="sortBy" class="form-control">
                                    <option value="">Default sortion</option>
                                    <option value="priceAsc" >Price - Low to High</option>
                                    <option value="priceDesc" >Price - High to Low</option>
                                    <option value="titleAsc" >Ascending Alphabetical</option>
                                    <option value="titleDes" >Descending Alphabetical</option>
                                    <option value="discAsc" >Discount Low to High</option>
                                    <option value="discDesc" >Discount High to Low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="product-data">
                @include('frontend.layouts._single-product')
            </div>
            <div class="ajax-load text-center" style="display:none;">
                <img src="{{asset('frontend/assets/images/loader.gif')}}" alt="Loading">
            </div>
        </div>
    </section>


@endsection

@section('scripts')
    <script>
        $('#sortBy').change(function(){
            var sort=$('#sortBy').val();
            // alert(sort);
            window.location="{{url(''.$route.'')}}/{{$category->slug}}?sort="+sort;
        });
    </script>

    <script>
        function loadMoreData(page) {
            $.ajax({
                url:'?page='+page,
                type:'get',
                beforeSend:function(){
                    $('.ajax-load').show();
                }
            }).done(function (data) {
                if(data.html==''){
                    $('.ajax-load').html('No more products');
                    return;
                }
                $('.ajax-load').hide();
                $('#product-data').append(data.html);
            })
            .fail(function(){
                alert('Something went wrong! please try again');
            });
        }

        var page=1;
        $(window).scroll(function(){
            if($(window).scrollTop()+$(window).height()+150 >=$(document).height()) {
                page ++;
                loadMoreData(page);
            }
        });
    </script>
@endsection
