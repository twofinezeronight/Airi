<x-guest-layout>
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Add Product</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="product-list.html" class="btn btn-primary"> View All
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Update Product</h2>
                        </div>
                        <form action="{{route('productupdate', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row ec-vendor-uploads">
                                    <div class="col-lg-8">
                                        <div class="ec-vendor-upload-detail">
                                            <form class="row g-3">
                                                
                                                <div class="col-md-6">
                                                    <img src="{{ asset('assets/img/products/'. $product->img) }}" alt="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail0" class="form-label">Product image</label>
                                                    <input type="file" class="form-control" name="img" placeholder="Product sale price" id="inputEmail0">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Product name</label>
                                                    <input type="text" value="{{$product->name}}" name="name" class="form-control slug-title" placeholder="Casual men shirt" id="inputEmail4">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Product type</label>
                                                    <select name="category_id" id="Categories" class="form-select">
                                                        @foreach($categories as $item)
                                                        @if($item->id==$product->category_id)
                                                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                                        @else
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail9" class="form-label">Product price</label>
                                                    <input type="text" value="{{$product->price}}" class=" form-control " name=" price" placeholder="Product price" id="inputEmail9">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEmail0" class="form-label">Product sale price</label>
                                                    <input type="text" class="form-control" placeholder="Product sale price" id="inputEmail0">
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control" rows="4"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="product_add_cancel_button">
                                                        <button type="submit" class="btn btn-border">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Update product</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</x-guest-layout>