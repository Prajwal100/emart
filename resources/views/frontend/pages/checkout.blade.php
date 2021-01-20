@extends('frontend.layouts.master')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
                <h6 class="banner-title">Checkout</h6>
            </div>
        </div>
    </div>


    <section class="checkout-page pt-30 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-form mt-50">
                        <h3 class="checkout-title"><i class="lni lni-user"></i>Name & Address</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>First Name *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Company</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Last Name *</label>
                                        <span class="required">* Required Fields</span>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Email Address *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Address 1 *</label>
                                        <input type="text">
                                        <input class="mt-15" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>City *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>State/Province * </label>
                                        <select>
                                            <option value="0">Nothing</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3" disabled>A disabled option</option>
                                            <option value="4">Potato</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Zip/Postal Code *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Country *</label>
                                        <select>
                                            <option value="0">Country</option>
                                            <option value="1">United States</option>
                                            <option value="2">Germany</option>
                                            <option value="3">Canada</option>
                                            <option value="4">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Telephone *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Fax</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-form mt-50">
                        <h3 class="checkout-title"><i class="lni lni-home"></i>Shipping Address</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>First Name *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Company</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Last Name *</label>
                                        <span class="required">* Required Fields</span>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Email Address *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form clearfix">
                                        <label>Address 1 *</label>
                                        <input type="text">
                                        <input class="mt-15" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>City *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>State/Province * </label>
                                        <select>
                                            <option value="0">Nothing</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3" disabled>A disabled option</option>
                                            <option value="4">Potato</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Zip/Postal Code *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Country *</label>
                                        <select>
                                            <option value="0">Country</option>
                                            <option value="1">United States</option>
                                            <option value="2">Germany</option>
                                            <option value="3">Canada</option>
                                            <option value="4">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Telephone *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form clearfix">
                                        <label>Fax</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="order-details mt-50">
                        <h3 class="checkout-title"><i class="lni lni-cart-full"></i>Your Order</h3>
                        <div class="order_review mt-30">
                            <table class="table table-responsive table-review-order">
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p>Challenge Battery Hammer Drill</p>
                                    </td>
                                    <td>
                                        <p class="price">$190.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Power X Change Battery - 3.0 mAh</p>
                                    </td>
                                    <td>
                                        <p class="price">$34.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Percussion Hammer Drill</p>
                                    </td>
                                    <td>
                                        <p class="price">$87.00</p>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>
                                        <p class="price">$87.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>
                                        <form action="#" class="shipping">
                                            <ul class="radio-order">
                                                <li>
                                                    <input type="radio" checked="" name="radio2" id="radio1">
                                                    <label for="radio1"><span></span>Free Shipping</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="radio2" id="radio2">
                                                    <label for="radio2"><span></span>Flat Rate: $10.00</label>
                                                </li>
                                            </ul>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>
                                        <p class="price">$197.00</p>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="order-payment mt-50">
                        <h3 class="checkout-title"><i class="lni lni-credit-cards"></i>Payment Method</h3>
                        <div class="payment-method-form mt-30">
                            <form action="#">
                                <div class="single-form">
                                    <ul class="radio-order">
                                        <li>
                                            <input type="radio" checked="" name="radio2" id="radio3">
                                            <label for="radio3"><span></span>Free Shipping</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio2" id="radio4">
                                            <label for="radio4"><span></span>Flat Rate: $10.00</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-form clearfix">
                                    <label>Name on Card *</label>
                                    <input type="text">
                                </div>
                                <div class="single-form clearfix">
                                    <label>State/Province * </label>
                                    <select>
                                        <option value="0">Visa</option>
                                        <option value="1">Mastercard</option>
                                    </select>
                                </div>
                                <div class="single-form clearfix">
                                    <label>Name on Card *</label>
                                    <input type="text">
                                </div>
                                <div class="single-form clearfix">
                                    <label>Name on Card *</label>
                                    <input type="text">
                                </div>
                                <div class="single-form clearfix">
                                    <div class="card-total">
                                        <table class="table-total-checkout">
                                            <tbody>
                                            <tr>
                                                <th>GRAND TOTAL:</th>
                                                <td>$197.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a href="#" class="main-btn">Place Order Now <span
                                                class="icon-action-redo"></span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
