<x-app-layout>
    @php
    $totalPrice = 0; // Khởi tạo biến tổng giá tiền
    $alltoltalPrice = 0
    @endphp
    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Cart</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Cart</span></li>
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
                <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
                    <div class="col-lg-8 mb-md--30">
                        <form class="cart-form" action="#">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="table-content table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                    <th class="text-start">Product</th>
                                                    <th>price</th>
                                                    <th>quantity</th>
                                                    <th>total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(session('cart'))

                                                @foreach(session('cart') as $id => $details)
                                                @php
                                                    // Tính giá tiền cho từng sản phẩm
                                                    $productTotal = $details['quantity'] * $details['price'];

                                                    // Cộng giá tiền của sản phẩm vào tổng tiền
                                                    $totalPrice += $productTotal;
                                                    $alltoltalPrice = $totalPrice + $shippingFee;
                                                @endphp
                                                <tr>
                                                    <td class="product-remove text-start">
                                                        <form action="{{ route('removeProduct', ['id' => $id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="remove-product-btn">
                                                                <i class="dl-icon-close"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td class="product-thumbnail text-start">
                                                        <img src="{{ asset('assets/img/products/'. $details['img']) }}" alt="">
                                                    </td>
                                                    <td class="product-name text-start wide-column">
                                                        <h3>
                                                            <a href="product-details.html">{{ $details['name'] }}</a>
                                                        </h3>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money">{{ number_format($details['price'], 0, '.', ',') }} VNĐ
                                                            </span>
                                                        </span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <form action="{{ route('updateCart', ['id' => $id]) }}" method="POST">
                                                            @csrf
                                                            <input type="number" class="quantity-input" name="quantity" value="{{ $details['quantity'] }}" min="1">
                                                            <button type="submit" class="update-cart-btn">Update</button>
                                                        </form>
                                                    </td>
                                                    <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money"><strong>{{ number_format( $productTotal,0,'.',',') }}VNĐ</strong></span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="5">Your cart is empty!</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 border-top pt--20 mt--20">
                                <div class="col-sm-6">
                                    <div class="coupon">
                                        <input type="text" id="coupon" name="coupon" class="cart-form__input" placeholder="Coupon Code">
                                        <button type="submit" class="cart-form__btn">Apply Coupon</button>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <form action="{{ route('clearCart') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="clear-cart-btn">Clear Cart</button>
                                    </form>

                                    <!-- <button type="submit" class="cart-form__btn">Update Cart</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-collaterals">
                            <div class="cart-totals">
                                <h5 class="mb--15">Cart totals</h5>
                                <div class="table-content table-responsive">
                                    <table class="table order-table">
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>{{ number_format( $totalPrice,0,'.',',') }}VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>

                                                    <span>{{number_format( $shippingFee,0,'.',',')}} VNĐ</span>

                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">{{ number_format( $alltoltalPrice,0,'.',',') }}VNĐ</span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="{{route('orders')}}" class="btn btn-fullwidth btn-style-1">
                                Proceed To Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
</x-app-layout>