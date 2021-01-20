@extends('frontend.layouts.master')

@section('content')



    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
                <h6 class="banner-title">Shopping Cart</h6>
            </div>
        </div>
    </div>


    <section class="wishlist-area pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="title">wishlist</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wishlist-table table-responsive mt-50">
                        <table class="table">
                            <thead class="thead-bg">
                            <tr>
                                <th class="product">Product</th>
                                <th class="price">Price</th>
                                <th class="stock">Stock status</th>
                                <th class="add-cart">Add to cart</th>
                                <th class="remove">Close</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product d-flex">
                                    <div class="product-img">
                                        <img src="frontend/assets/images/product-1.jpg" alt="product">
                                    </div>
                                    <div class="product-content media-body">
                                        <h4 class="product-title">Black Beanie Skate Girl</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            Commodo...</p>
                                    </div>
                                </td>
                                <td class="price">
                                    <div class="product-Price">
                                        <span>$190.00 <del>$280.00</del></span>
                                    </div>
                                </td>
                                <td class="stock">
                                    <div class="product-stock">
                                        <a class="in-stock" href="#">In stock</a>
                                    </div>
                                </td>
                                <td class="add-cart">
                                    <div class="product-add">
                                        <a class="main-btn" href="#">Add to cart</a>
                                    </div>
                                </td>
                                <td class="remove">
                                    <div class="product-remove">
                                        <a href="#"><i class="lni lni-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product d-flex">
                                    <div class="product-img">
                                        <img src="frontend/assets/images/product-2.jpg" alt="product">
                                    </div>
                                    <div class="product-content media-body">
                                        <h4 class="product-title">Black Beanie Skate Girl</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            Commodo...</p>
                                    </div>
                                </td>
                                <td class="price">
                                    <div class="product-Price">
                                        <span>$190.00 <del>$280.00</del></span>
                                    </div>
                                </td>
                                <td class="stock">
                                    <div class="product-stock">
                                        <a class="out-stock" href="#">Out of stock</a>
                                    </div>
                                </td>
                                <td class="add-cart">
                                    <div class="product-add">
                                        <a class="main-btn" href="#">Add to cart</a>
                                    </div>
                                </td>
                                <td class="remove">
                                    <div class="product-remove">
                                        <a href="#"><i class="lni lni-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product d-flex">
                                    <div class="product-img">
                                        <img src="frontend/assets/images/product-3.jpg" alt="product">
                                    </div>
                                    <div class="product-content media-body">
                                        <h4 class="product-title">Black Beanie Skate Girl</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            Commodo...</p>
                                    </div>
                                </td>
                                <td class="price">
                                    <div class="product-Price">
                                        <span>$190.00 <del>$280.00</del></span>
                                    </div>
                                </td>
                                <td class="stock">
                                    <div class="product-stock">
                                        <a class="in-stock" href="#">In stock</a>
                                    </div>
                                </td>
                                <td class="add-cart">
                                    <div class="product-add">
                                        <a class="main-btn" href="#">Add to cart</a>
                                    </div>
                                </td>
                                <td class="remove">
                                    <div class="product-remove">
                                        <a href="#"><i class="lni lni-close"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
