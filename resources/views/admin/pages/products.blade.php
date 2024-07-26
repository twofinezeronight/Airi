<x-guest-layout>
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>All products</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="product-add.html" class="btn btn-primary"> Add Porduct</a>
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
                                            <th>Photo</th>
                                            <th>Product name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Total sales</th>
                                            <th>Stock</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($products as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td><img class="tbl-thumb" src="{{ asset('assets/img/products/'. $item->img) }}" alt="Product Image" /></td>
                                            <td>{{$item->name}}</td>
                                            <td>Office chair</td>
                                            <td>{{ number_format($item->price,0,'.',',')}}VNĐ</td>
                                            <td>5782</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>$40,892</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button" class="btn btn-outline-success">Info</button>
                                                    <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('productedit', ['id' => $item->id])}}">Edit</a>
                                                        <a class="dropdown-item" href="{{ route('productdelete', ['id' => $item->id]) }}">Delete</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {{ $products->links('pagination::default') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</x-guest-layout>