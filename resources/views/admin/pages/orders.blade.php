<x-guest-layout>
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper">
                <div>
                    <h1>All Orders</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>All Orders
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <td>Customer</td>
                                            <th>Product name</th>
                                            <th>Price</th>
                                            <th>Payment type</th>
                                            <th>Shipping address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
                                            <td>
                                                @foreach($order->orderProducts as $orderProduct)
                                                <li>{{ $orderProduct->product->name }} x {{ $orderProduct->quantity }}</li>
                                                @endforeach
                                            </td>
                                            <td>{{ number_format($order['total'],0,'.',',')  }}VNĐ</td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ $order->customer->street_address }}</td>
                                            <td>
                                                <form action="{{ route('updateStatus', $order->id) }}" method="POST">
                                                    @csrf
                                                    <select name="status" class="form-select">
                                                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="active" {{ $order->status == 'active' ? 'selected' : '' }}>Active</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-primary mt-2">Update Status</button>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <form action="{{ route('deleteOrder', $order->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</x-guest-layout>