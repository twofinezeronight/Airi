<div id="sidebar" class="sidebar ec-sidebar-footer">

    <div class="ec-brand">
        <a href="index.html">
            <img class="ec-brand-icon" src="{{asset('layout_admin/assets/img/logo/favicon.png')}}" alt="" />
            <span class="ec-brand-name text-truncate">ANDSHOP</span>
        </a>
    </div>

    <!-- begin sidebar scrollbar -->
    <div class="ec-navigation" data-simplebar>
        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <!-- Dashboard -->
            <li class="active">
                <a class="sidenav-item-link" href="index.html">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <hr>
            </li>

            <!-- Vendors -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <i class="mdi mdi-briefcase-outline"></i>
                    <span class="nav-text">Vendors</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                        <li class="">
                            <a class="sidenav-item-link" href="vendor-card.html">
                                <span class="nav-text">Vendor Grid</span>
                            </a>
                        </li>

                        <li class="">
                            <a class="sidenav-item-link" href="vendor-list.html">
                                <span class="nav-text">Vendor List</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="vendor-profile.html">
                                <span class="nav-text">Vendors Profile</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="add-vendor.html">
                                <span class="nav-text">Add Vendors</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Users -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <i class="mdi mdi-account-multiple-outline"></i>
                    <span class="nav-text">Customers</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                        <li>
                            <a class="sidenav-item-link" href="user-card.html">
                                <span class="nav-text">User Grid</span>
                            </a>
                        </li>

                        <li class="">
                            <a class="sidenav-item-link" href="user-list.html">
                                <span class="nav-text">User List</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">Users Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr>
            </li>

            <!-- Category -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <i class="mdi mdi-shape"></i>
                    <span class="nav-text">Categories</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                        <li class="">
                            <a class="sidenav-item-link" href="main-category.html">
                                <span class="nav-text">All Category</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="add-category.html">
                                <span class="nav-text">Add Category</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Products -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <!-- <i class="mdi mdi-palette-advanced"></i> -->
                    <i class="mdi mdi-package-variant-closed"></i>
                    <span class="nav-text">Products</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                        <li class="">
                            <a class="sidenav-item-link" href="{{route('add_product')}}">
                                <span class="nav-text">Add Product</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="{{route('products')}}">
                                <span class="nav-text">List Product</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="product-grid.html">
                                <span class="nav-text">Grid Product</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="product-detail.html">
                                <span class="nav-text">Product Detail</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Orders -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <i class="mdi mdi-cart-outline"></i>
                    <span class="nav-text">Orders</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                        <li class="">
                            <a class="sidenav-item-link" href="{{route('orders_list')}}">
                                <span class="nav-text">Order list</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="sidenav-item-link" href="order-detail.html">
                                <span class="nav-text">Order Detail</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Invoice -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <i class="mdi mdi-receipt"></i>
                    <span class="nav-text">Invoice</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
                        <li class="">
                            <a href="invoice.html">
                                <span class="nav-text">Invoice list</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="invoice-details.html">
                                <span class="nav-text">Invoice details</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Reviews -->
            <li>
                <a class="sidenav-item-link" href="review-list.html">
                    <i class="mdi mdi-star-circle-outline"></i>
                    <span class="nav-text">Reviews</span>
                </a>
            </li>

            <!-- Brands -->
            <li>
                <a class="sidenav-item-link" href="brand-list.html">
                    <i class="mdi mdi-tag-outline"></i>
                    <span class="nav-text">Brands</span>
                </a>
                <hr>
            </li>
            <!-- Transactions -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <i class="mdi mdi-finance"></i>
                    <span class="nav-text">Transactions</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
                        <li class="">
                            <a href="all-transactions.html">
                                <span class="nav-text">All transactions</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="transaction-details.html">
                                <span class="nav-text">Transaction details</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Setting -->
            <li>
                <a class="sidenav-item-link" href="setting.html">
                    <i class="mdi mdi-cogs"></i>
                    <span class="nav-text">Setting</span>
                </a>
            </li>
            <!-- Authentication -->
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)">
                    <i class="mdi mdi-login-variant"></i>
                    <span class="nav-text">Authentication</span> <b class="caret"></b>
                </a>
                <div class="collapse">
                    <ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
                        <li class="">
                            <a href="sign-in.html">
                                <span class="nav-text">Sign In</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="sign-up.html">
                                <span class="nav-text">Sign Up</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Error page -->
            <li>
                <a class="sidenav-item-link" href="404.html">
                    <i class="mdi mdi-alert-circle-outline"></i>
                    <span class="nav-text">Error page</span>
                </a>
            </li>
        </ul>
    </div>
</div>