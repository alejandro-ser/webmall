@extends('layouts.front')

@section('content')

<!-- checkout-area start -->
<div class="checkout-area ptb-50">
    <div class="container">
        <div class="section-title-4 text-center mb-40">
            <h2>Checkout</h2>
        </div>
        <div class="row">
            <form action="{{route('orders.store')}}" method="post">
                @csrf
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="checkbox-form">						
                        <h3>Shipping information</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label for="shipping_fullname">Full Name <span class="required">*</span></label>
                                    <input type="text" name="shipping_fullname" id="shipping_fullname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label for="shipping_state">State <span class="required">*</span></label>
                                    <input type="text" name="shipping_state" id="shipping_state">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label for="shipping_city">City <span class="required">*</span></label>										
                                    <input type="text" name="shipping_city" id="shipping_city">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label for="shipping_address">Full Address <span class="required">*</span></label>
                                    <input type="text" name="shipping_address" id="shipping_address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label for="shipping_phone">Phone <span class="required">*</span></label>
                                    <input type="text" name="shipping_phone" id="shipping_phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label for="shipping_zipcode">Zip <span class="required">*</span></label>
                                    <input type="text" name="shipping_zipcode" id="shipping_zipcode">
                                </div>
                            </div>							
                        </div>
                    </div>
                </div>	
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>							
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">£165.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Vestibulum dictum magna	<strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">£50.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">£215.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">£215.00</span></strong>
                                        </td>
                                    </tr>								
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <h4>Payment option</h4>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="payment_method" id="cash_on_delivery" value="cash_on_delivery" style="height:5px;width:12%;">
                                <label class="form-check-label" for="cash_on_delivery">Cash on delivery</label>
                            </div>
                        
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="payment_method" id="paypal" value="paypal" style="height:5px;width:12%;">
                                <label class="form-check-label" for="paypal">Paypal</label>
                            </div>
                            <div class="order-button-payment">
                                <input type="submit" value="Place order" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="your-order floatright">
                    <h3>Have a coupon?</h3>
                    <div class="coupon-info">
                        <form action="#">
                            <p class="checkout-coupon">
                                <input type="text" placeholder="Coupon code" />
                                <input type="submit" value="Apply Coupon" />
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- checkout-area end -->

@endsection