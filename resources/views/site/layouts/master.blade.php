<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site_assets/assets/imgs/theme/favicon.svg') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('site_assets/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('site_assets/assets/css/vendors/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site_assets/assets/css/acount.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    
    {{-- niceCountryInput --}}
    <link rel="stylesheet" href="{{ asset('plugin/country/niceCountryInput.css') }}">

    <!-- vendor min  css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/sweetalert/sweetalert2.min.css') }}">

    <style type="text/css">
    .answer { display:none }
    .error {border-color: #dc3545}
    .center-image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
</style>
</head>

<body>
    <!-- Modal -->
{{--     <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">              
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
                <div class="modal-body">
                    <div class="deal" style="background-image: url('{{ asset('site_assets/assets/imgs/banner/menu-banner-7.png') }}')">
                        <div class="deal-top">
                            <h2 class="text-brand">Deal of the Day</h2>
                            <h5>Limited quantities.</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden Design</a></h6>
                            <div class="product-price"><span class="new-price">$139.00</span><span class="old-price">$160.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"><span class="countdown-section"><span class="countdown-amount hover-up">03</span><span class="countdown-period"> days </span></span><span class="countdown-section"><span class="countdown-amount hover-up">02</span><span class="countdown-period"> hours </span></span><span class="countdown-section"><span class="countdown-amount hover-up">43</span><span class="countdown-period"> mins </span></span><span class="countdown-section"><span class="countdown-amount hover-up">29</span><span class="countdown-period"> sec </span></span></div>
                            <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div> --}}

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">              
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('site_assets/assets/imgs/shop/product-16-2.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('site_assets/assets/imgs/shop/product-16-1.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('site_assets/assets/imgs/shop/product-16-3.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('site_assets/assets/imgs/shop/product-16-4.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('site_assets/assets/imgs/shop/product-16-5.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('site_assets/assets/imgs/shop/product-16-6.jpg') }}" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('site_assets/assets/imgs/shop/product-16-7.jpg') }}" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="{{ asset('site_assets/assets/imgs/shop/thumbnail-3.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('site_assets/assets/imgs/shop/thumbnail-4.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('site_assets/assets/imgs/shop/thumbnail-5.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('site_assets/assets/imgs/shop/thumbnail-6.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('site_assets/assets/imgs/shop/thumbnail-7.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('site_assets/assets/imgs/shop/thumbnail-8.jpg') }}" alt="product image"></div>
                                    <div><img src="{{ asset('site_assets/assets/imgs/shop/thumbnail-9.jpg') }}" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a></li>
                                    <li class="social-linkedin"><a href="#"><img src="{{ asset('site_assets/assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Shop: <a href="shop-grid-right.html">Bootstrap</a></span>
                                    </div>
                                    {{-- <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div> --}}
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">$120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>
                                
                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        {{--  <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --}}
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-50">
                                    {{-- <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li> --}}
                                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                    {{-- <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li> --}}
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>

    
    @include('site.layouts.header')
    
    <main class="main">       
        @yield('page_content')
    </main>
    @include('site.layouts.footer')
    <!-- Preloader Start -->
   {{--  <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-10">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Vendor JS-->
    <script src="{{ asset('site_assets/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    
    <!-- Template  JS -->
    <script src="{{ asset('site_assets/assets/js/main.js') }}"></script>
    <script src="{{ asset('site_assets/assets/js/shop.js') }}"></script>
    
    {{-- niceCountryInput js --}}
    <script src="{{ asset('plugin/country/niceCountryInput.js') }}" type="text/javascript"></script>

    <!-- min sweetalert -->
    <script src="{{ asset('plugin/sweetalert/sweetalert2.all.min.js') }}"></script>

    <!-- min sweetalert -->
    <script src="{{ asset('site_assets/assets/js/cart.js') }}"></script>

    {{--jquery number--}}
    <script src="{{ asset('plugin/jquery.number.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('sellersRegister')
    @stack('profile')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function onChangeCallback(ctr){
            // console.log("The country was changed: " + ctr);
            //$("#selectionSpan").text(ctr);
        }

        $(document).ready(function () {
            $(".niceCountryInputSelector").each(function(i,e){
                new NiceCountryInput(e).init();
            });
        });

        interact('.resize-drag').draggable({
            onmove(event) {
              // console.log(event.pageX, event.pageY)
          },
      });
  </script>

  <script type="text/javascript">

    $(document).ready(function() {

        $('button.subscribe').on('click', function(event) {
            event.preventDefault();

            var button = $(this);
            button.attr('disabled' , true);
            email = $(this).prev().val();
            $.ajax({
                url: '{{ url('/subscribe') }}',
                type: 'GET',
                dataType: 'json',
                data: {email:email},
            })
            .done(function(data) {
                Swal.fire({
                    icon: data.status,
                    text: data.message,
                });
            button.attr('disabled' , false);

            });

        });

        });//end of document ready function

    </script>

</body>

</html>