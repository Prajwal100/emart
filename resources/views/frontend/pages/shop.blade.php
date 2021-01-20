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
                            <select>
                                <option value="0">Default sortion</option>
                                <option value="1">popularity</option>
                                <option value="2">Average ration</option>
                                <option value="3">newness</option>
                                <option value="4">price</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               @if(count($category->products)>0)
                   @foreach($category->products as $product)
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
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name"><a href="product-details.html">{{$product->title}}</a></h5>
                                    <span class="price">${{number_format($product->price,2)}}</span>
                                    <ul class="actions">
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i
                                                    class="lni lni-eye"></i></a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i></a></li>
                                        <li><a href="#"><i class="lni lni-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-danger">No product found</div>
                @endif
            </div>
        </div>
    </section>


@endsection
