<header class="main-header navbar">
    <div class="col-search">
        <form class="searchform">
            <div class="input-group">
                <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i></button>
            </div>
            <datalist id="search_terms">
                <option value="Products">
                <option value="New orders">
                <option value="Apple iphone">
                <option value="Ahmed Hassan">
            </datalist>
        </form>
    </div>
    <div class="col-nav">
        <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link btn-icon" href="#">
                    <i class="material-icons md-notifications animation-shake"></i>
                    <span class="badge rounded-pill">3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-icon darkmode" data-dark="{{ session()->get('darkmode') == 'dark' ? 'dark' : 'nodark'}}" data-method='post' data-url="{{ route('darkmode') }}" href="#"> <i class="material-icons md-nights_stay"></i> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
            </li>
            <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item text-brand" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            <img src="{{ asset('site_assets/assets/imgs/lang') }}/{{ $properties['native'] == 'English' ? 'en.jpeg' : 'ar.jpeg' }}" alt="English">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </li>
            <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> 
                    <img class="img-xs rounded-circle" src="{{ Storage::disk('public')->url('admins/'.Auth::guard('admin')->user()->image) }}" alt="User">
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                    <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
{{--                             <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                    <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                    <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a> --}}
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST" >
                        @csrf

                        <button class="dropdown-item text-danger" ><i class="material-icons md-exit_to_app"></i>Logout </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>