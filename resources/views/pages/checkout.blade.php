<x-app-layout>
    

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Checkout</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--80 pt-md--60 pt-sm--40">
                    <div class="col-12">
                        <!-- User Action Start -->
                        <div class="user-actions user-actions__coupon">
                            <div class="message-box mb--30 mb-sm--20">
                                <p><i class="fa fa-exclamation-circle"></i> Have A Coupon? <a class="expand-btn" href="#coupon_info">Click Here To Enter Your Code.</a></p>
                            </div>
                            <div id="coupon_info" class="user-actions__form hide-in-default">
                                <form action="#" class="form">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <div class="form__group d-sm-flex">
                                        <input type="text" name="coupon" id="coupon" class="form__input form__input--2 mr--20 mr-xs--0" placeholder="Coupon Code">
                                        <button type="submit" class="btn btn-medium btn-style-1">Apply
                                            Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- User Action End -->
                    </div>
                </div>
                <div class="row pb--80 pb-md--60 pb-sm--40">
                    <form action="{{route('createCustomer')}}" method="POST" class="form form--checkout d-flex">
                        @csrf
                        <!-- Checkout Area Start -->
                        <div class="col-lg-6">
                            <div class="checkout-title mt--10">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="checkout-form">
                                <div class="row mb--30">
                                    <div class="form__group col-md-6 mb-sm--30">
                                        <label for="billing_fname" class="form__label form__label--2">First Name
                                            <span class="required">*</span></label>
                                        <input type="text" name="billing_fname" id="billing_fname" class="form__input form__input--2">
                                    </div>
                                    <div class="form__group col-md-6">
                                        <label for="billing_lname" class="form__label form__label--2">Last Name
                                            <span class="required">*</span></label>
                                        <input type="text" name="billing_lname" id="billing_lname" class="form__input form__input--2">
                                    </div>
                                </div>


                                <div class="row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_streetAddress" class="form__label form__label--2">Street
                                            Address <span class="required">*</span></label>

                                        <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input form__input--2 mb--30" placeholder="House number and street name">


                                    </div>
                                </div>
                                <div class="row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_city" class="form__label form__label--2">Town / City
                                            <span class="required">*</span></label>
                                        <input type="text" name="billing_city" id="billing_city" class="form__input form__input--2">
                                    </div>
                                </div>

                                <div class="row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_phone" class="form__label form__label--2">Phone <span class="required">*</span></label>
                                        <input type="text" name="billing_phone" id="billing_phone" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="row mb--30">
                                    <div class="form__group col-12">
                                        <label for="billing_email" class="form__label form__label--2">Email Address
                                            <span class="required">*</span></label>
                                        <input type="email" name="billing_email" id="billing_email" class="form__input form__input--2">
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="form__group col-12">
                                        <label for="orderNotes" class="form__label form__label--2">Order
                                            Notes</label>
                                        <textarea class="form__input form__input--2 form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                            <div class="order-details">
                                <div class="checkout-title mt--10">
                                    <h2>Your Order</h2>
                                </div>
                                <div class="table-content table-responsive mb--30">
                                    @if (count($cart) > 0)
                                    <table class="table order-table order-table-2">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart as $item)
                                            <tr>
                                                <th>{{ $item['name']}}
                                                    <strong><span>&#10005;</span>{{ $item['quantity']}}</strong>
                                                </th>
                                                <td class="text-end">{{ number_format( $item['price'],0,'.',',') }}VNĐ</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td class="text-end">{{ number_format( $totalPrice,0,'.',',') }}VNĐ</td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td class="text-end">
                                                    <span>{{ number_format( $shippingFee,0,'.',',') }}VNĐ</span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td class="text-end"><span class="order-total-ammount" name="total">{{ number_format( $alltoltalPrice,0,'.',',') }}VNĐ</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    @else
                                    <p>Your cart is empty.</p>
                                    @endif
                                </div>
                                <div class="checkout-payment">
                                    <div class="payment-group mb--10">
                                        <div class="payment-radio">
                                            <input type="radio" value="e-wallets" name="payment-method" id="e-wallets" checked>
                                            <label class="payment-label" for="e-wallets">Thanh toán bằng ví điện tử</label>
                                        </div>
                                        <div class="payment-info" data-method="bank">
                                            <p>Make your payment directly into our bank account. Please use your
                                                Order ID as the payment reference. Your order will not be shipped
                                                until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                    <div class="payment-group mb--10">
                                        <div class="payment-radio">
                                            <input type="radio" value="bank" name="payment-method" id="bank">
                                            <label class="payment-label" for="bank">
                                                Chuyển khoản ngân hàng
                                            </label>
                                        </div>
                                        <div class="payment-info cheque hide-in-default" data-method="cheque">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                    <div class="payment-group mb--10">
                                        <div class="payment-radio">
                                            <input type="radio" value="cash" name="payment-method" id="cash">
                                            <label class="payment-label" for="cash">
                                                Thanh toán khi giao hàng
                                            </label>
                                        </div>
                                        <div class="payment-info cash hide-in-default" data-method="cash">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                    <div class="payment-group mt--20">
                                        <p class="mb--15">Your personal data will be used to process your order,
                                            support your experience throughout this website, and for other purposes
                                            described in our privacy policy.</p>

                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-fullwidth btn-style-1">Place
                                Order</button>
                        </div>

                        <!-- Checkout Area End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
</x-app-layout>