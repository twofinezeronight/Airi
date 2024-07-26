<!-- Header -->
<header class="ec-main-header" id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler">
            <img src="{{asset('layout_admin/assets/img/icons/clops.png')}}" alt="">
        </button>
        <!-- search form -->
        <div class="search-form d-lg-inline-block">
            <div class="input-group">
                <input type="text" name="query" id="search-input" class="form-control" placeholder="search.." autofocus autocomplete="off" />
                <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                </button>
            </div>
            <div id="search-results-container">
                <ul id="search-results"></ul>
            </div>
        </div>

        <!-- navbar right -->
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('layout_admin/assets/img/user/user-1.png')}}" class="user-image" alt="User Image" />
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
                        <!-- User image -->
                        <li class="dropdown-header">
                            <div class="d-inline-block">
                                <h5>Alex Dor</h5>
                                <p class="pt-2">demo@gmail.com</p>
                            </div>
                        </li>
                        <li>
                            <a href="user-profile.html">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        <li class="dropdown-footer">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                        <a class="btn btn-fullwidth btn-style-1" href="{{route('home')}}">Trở về trang chủ</a>
                        
                    </ul>
                </li>
                <li class="dropdown notifications-menu custom-dropdown">
                    <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                        <i class="mdi mdi-bell-ring-outline"></i>
                    </button>

                    <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                        <div class="card-header card-header-border-bottom px-3">
                            <h2>Notifications</h2>
                        </div>

                        <div class="card-body px-0 py-0">
                            <div class="tab-content" id="myNotifications">
                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                    <li>
                                        <a href="javscript:void(0)" class="media media-message media-notification">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="{{asset('layout_admin/assets/img/user/u2.jpg')}}" alt="Image">
                                                <span class="status away"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Nitin</h4>
                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                        consectetur adipisicing elit. Nam itaque
                                                        doloremque odio, eligendi delectus vitae.</p>

                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 30 min
                                                        ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javscript:void(0)" class="media media-message media-notification media-active">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="{{asset('layout_admin/assets/img/user/u1.jpg')}}" alt="Image">
                                                <span class="status active"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Lovina</h4>
                                                    <p class="last-msg">Donec mattis augue a nisl
                                                        consequat, nec imperdiet ex rutrum. Fusce et
                                                        vehicula enim. Sed in enim eu odio vehic.</p>

                                                    <span class="font-size-12 font-weight-medium text-white">
                                                        <i class="mdi mdi-clock-outline"></i> Just
                                                        now...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javscript:void(0)" class="media media-message media-notification">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="{{asset('layout_admin/assets/img/user/u5.jpg')}}" alt="Image">
                                                <span class="status away"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Crinali</h4>
                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                        consectetur adipisicing elit. Nam itaque
                                                        doloremque odio, eligendi delectus vitae.</p>

                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                        ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javscript:void(0)" class="media media-message media-notification">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="{{asset('layout_admin/assets/img/user/u4.jpg')}}" alt="Image">
                                                <span class="status away"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Crinali</h4>
                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                        consectetur adipisicing elit. Nam itaque
                                                        doloremque odio, eligendi delectus vitae.</p>

                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                        ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="dropdown-menu dropdown-menu-right d-none">
                        <li class="dropdown-header">You have 5 notifications</li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-plus"></i> New user registered
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-remove"></i> User deleted
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-supervisor"></i> New client
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-server-network-off"></i> Server overloaded
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                            </a>
                        </li>
                        <li class="dropdown-footer">
                            <a class="text-center" href="#"> View All </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>