<x-app-layout>
    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Thank you for shopping</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Orders successfully</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 offset-xl-1 col-lg-6 mt-md--40 mb-5 mt-5">
                <div class="order-details">
                    <div class="checkout-title mt--10">
                        <h2>Your Order</h2>
                    </div>
                    <div class="table-content table-responsive mb--30">
                        <table class="table order-table order-table-2">
                            <thead>
                                <tr>
                                    <th><strong>Mã đơn:</strong> {{ $order['id']}}</th>
                                    
                                    <td class="text-end"></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th><strong>Họ tên người đặt: </strong>{{ $customer['first_name'] }} {{ $customer['last_name'] }}</th>
                                    
                                    <td class="text-end"></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th><strong>Địa chỉ:</strong> {{ $customer['street_address'] }} {{ $customer['city'] }}</th>
                                    
                                    <td class="text-end"></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th><strong>Email:</strong> {{ $customer['email'] }}</th>
                                    
                                    <td class="text-end"></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th><strong>SĐT:</strong> {{ $customer['phone'] }}</th>
                                    
                                    <td class="text-end"></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    
                                    <th class="text-end">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orderProducts as $orderProduct)
                                <tr>
                                    <th>{{ $orderProduct->product->name }}
                                        <strong><span>&#10005;</span>{{ $orderProduct->quantity }}</p></strong>
                                    </th>
                                    <td class="text-end">{{ number_format($orderProduct->product->price,0,'.',',') }}VNĐ</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                                <tr class="order-total">
                                    <th>Shipping</th>
                                    <td class="text-end"><span class="order-total-ammount">{{ number_format($shippingFee,0,'.',',')  }}VNĐ</span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td class="text-end"><span class="order-total-ammount">{{ number_format($order['total'],0,'.',',')  }}VNĐ</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <a class="btn btn-fullwidth btn-style-1" href="{{route('home')}}">Trở về trang chủ</a>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>