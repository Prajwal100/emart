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
                    <div class="shopping-table table-responsive mt-50">
                        <table class="table">
                            <thead class="thead-bg">
                            <tr>
                                <th class="product">Product</th>
                                <th class="price">Price</th>
                                <th class="quantity">Quantity</th>
                                <th class="total">Total</th>
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
                                <td class="quantity">
                                    <div class="product-quantity d-flex justify-content-center" id="quantity">
                                        <button type="button" id="sub" class="sub">-</button>
                                        <input type="text" id="1" value="0" />
                                        <button type="button" id="add" class="add">+</button>
                                    </div>
                                </td>
                                <td class="total">
                                    <div class="product-Price">
                                        <span>$190.00</span>
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
                                <td class="quantity">
                                    <div class="product-quantity d-flex justify-content-center" id="quantity">
                                        <button type="button" id="sub" class="sub">-</button>
                                        <input type="text" id="1" value="0" />
                                        <button type="button" id="add" class="add">+</button>
                                    </div>
                                </td>
                                <td class="total">
                                    <div class="product-Price">
                                        <span>$190.00</span>
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
                                <td class="quantity">
                                    <div class="product-quantity d-flex justify-content-center" id="quantity">
                                        <button type="button" id="sub" class="sub">-</button>
                                        <input type="text" id="1" value="0" />
                                        <button type="button" id="add" class="add">+</button>
                                    </div>
                                </td>
                                <td class="total">
                                    <div class="product-Price">
                                        <span>$190.00</span>
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
