<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="{{ route('Dashboard') }}" class="brand-wrap">
            <img src="{{ asset('store_assets/assets/imgs/theme/logo.svg') }}" class="logo" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        @php

        $dashboard = $slides = $admins = $users = $about = $messages = $categories = $products = $pages =
        $offers = $coupons = $stores  = '';

        $active = Request::segment(3);


        switch ($active) {
            case null:
            $dashboard = 'active';
            break;
            case 'slides':
            $slides = 'active';
            break;
            case 'admins':
            $admins = 'active';
            break;
            case 'about':
            $about = 'active';
            break;
            case 'messages':
            $messages = 'active';
            break;
            case 'categories':
            $categories = 'active';
            break;
            case 'products':
            $products = 'active';
            break;
            case 'pages':
            $pages = 'active';
            break;
            case 'offers':
            $slides = 'active';
            break;
            case 'coupons':
            $slides = 'active';
            break;
            case 'users':
            $users = 'active';
            break;
            case 'stores':
            $stores = 'active';
            break;

            default:
                    // code...
            break;
        }


        @endphp
        <ul class="menu-aside">
            <li class="menu-item {{ $dashboard }}">
                <a class="menu-link" href="{{ url('/Dashboard') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            <li class="menu-item {{ $about }}">
                <a class="menu-link" href="{{ route('about.edit') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">About Us</span>
                </a>
            </li>

            <li class="menu-item {{ $messages }}">
                <a class="menu-link" href="{{ route('messages.index') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Messages</span>
                </a>
            </li>


            <li class="menu-item has-submenu {{ $admins }}">
                <a class="menu-link" href="{{ route('admins.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text">Admins</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('admins.index') }}">Admins</a>
                    <a href="{{ route('admins.create') }}">Add New Admin</a>
                </div>
            </li>

            <li class="menu-item has-submenu">
                <a class="menu-link" href="{{ route('dashboard_orders.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text">Orders</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('dashboard_orders.index') }}">Orders</a>
                    {{-- <a href="{{ route('orders.create') }}">Add New Admin</a> --}}
                </div>
            </li>


            <li class="menu-item has-submenu ">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Sellers</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('sellering.index') }}">Sellers Applications</a>
                    <a href="{{ route('seller.prfile') }}">Seller profile</a>
                </div>
            </li>   

            <li class="menu-item has-submenu {{ $stores }} ">
                <a class="menu-link" href="{{ route('stores.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text">Stores</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('stores.index') }}">Stores</a>
                </div>
            </li>


            <li class="menu-item has-submenu {{ $categories }} ">
                <a class="menu-link" href="{{ route('categories.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text">Categories</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('categories.index') }}">Categories</a>
                    <a href="{{ route('categories.create') }}">Add New Category</a>
                </div>
            </li>

            <li class="menu-item has-submenu {{ $products }}">
                <a class="menu-link" href="{{ route('products.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text"> Product </span>
                </a>
                <div class="submenu">
                    <a href="{{ route('products.index') }}"> Product </a>
                    <a href="{{ route('products.create') }}">Add New Product</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{ $slides }}">
                <a class="menu-link" href="{{ route('slides.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text"> Promotions </span>
                </a>
                <div class="submenu">
                    <a href="{{ route('slides.index') }}"> Sliders </a>
                    <a href="{{ route('slides.create') }}">Add new slider</a>
                    <a href="{{ route('offers.index') }}"> Top offers</a>
                    <a href="{{ route('offers.create') }}">Add new top offer</a>
                    <a href="{{ route('coupons.index') }}"> Coupons </a>
                    <a href="{{ route('coupons.create') }}">Add new coupon</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{ $pages }}">
                <a class="menu-link" href="{{ route('pages.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text"> Pages </span>
                </a>
                <div class="submenu">
                    <a href="{{ route('pages.index') }}"> Pages </a>
                    <a href="{{ route('pages.create') }}">Add New Page</a>
                </div>
            </li>

            <li class="menu-item has-submenu {{ $users }}">
                <a class="menu-link" href="{{ route('users.index') }}"> 
                    <i class=" icon material-icons md-supervised_user_circle">  </i>
                    <span class="text"> users </span>
                </a>
                <div class="submenu">
                    <a href="{{ route('users.index') }}"> users </a>
                    {{-- <a href="{{ route('pages.create') }}">Add New Page</a> --}}
                </div>
            </li>



              {{--   
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                        <span class="text">my Store </span>
                    </a>
                    <div class="submenu">
                        <a href="{{ url('/myStore/stores/create') }}"> Create New Store </a>
                        <a href="{{ url('/myStore/stores/store') }}">Store 1</a>
                        <a href="{{ url('/myStore/stores/store') }}"> Store 2 </a>
                        <a href="{{ url('/myStore/stores/store') }}">Store 3 </a>
                    </div>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="{{ url('/myStore/statistics') }}"> <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Statistics</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="{{ url('/myStore/wallet') }}"> <i class="icon material-icons md-monetization_on"></i>
                        <span class="text">Wallet</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ url('/myStore/settings') }}"> <i class="icon material-icons md-settings"></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                --}}




                
                
            </ul>
            <hr>
            <ul class="menu-aside">
                <li class="menu-item">
                    <a class="menu-link" href="{{ url('/') }}"> <i class="icon material-icons md-local_offer"></i>
                        <span class="text"> Website </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ url('/') }}"> <i class="icon material-icons md-exit_to_app"></i>
                        <span class="text"> Logout </span>
                    </a>
                </li>
            </ul>
            <br>
            <br>
        </nav>
    </aside>