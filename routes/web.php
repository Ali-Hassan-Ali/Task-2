<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SlideController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\AjaxController;
use App\Http\Controllers\Dashboard\CouponController;
use App\Http\Controllers\Dashboard\OfferController;
use App\Http\Controllers\Dashboard\SizeController;
use App\Http\Controllers\Dashboard\SellerDetlseController;
// use App\Http\Controllers\Dashboard\StoreController;


use App\Http\Controllers\Dashboard\AdminAuthController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Site\Auth\User\RegisterController;
use App\Http\Controllers\Site\Auth\User\LoginController;
use App\Http\Controllers\Site\SellerController;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\OrderController;
use App\Http\Controllers\Site\User\ProfileController as UserProfileContoller;


use App\Http\Controllers\Seller\SellerProductController;
use App\Http\Controllers\Seller\StoreController;
use App\Http\Controllers\Seller\SettingController;
use App\Http\Controllers\Seller\WelcomController;
// use Mailchimp;

// use Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';
// Route::get('test'  , function(){
// });


Route::get('/add_new_item' , [AjaxController::class , 'add_new_item']);



Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){

    Route::group(['prefix' => 'Dashboard'], function() {
        Route::get('/login', [AdminAuthController::class , 'login_form'])->name('login_form');
        Route::post('/login', [AdminAuthController::class , 'login'])->name('login');
        Route::group(['middleware' => 'adminLoggedIn'], function() {
            Route::get('/'  , [DashboardController::class , 'index'])->name('Dashboard');
            Route::post('/logout'  , [AdminAuthController::class , 'logout'])->name('logout');
            Route::get('/profile/edit'  , [ProfileController::class , 'profile_edit'])->name('profile.edit');
            Route::patch('/profile'  , [ProfileController::class , 'update_profile'])->name('profile.update');
            Route::resource('admins', AdminController::class);
            Route::resource('sellering', App\Http\Controllers\Dashboard\SellerController::class);
            Route::post('status.sellering', [App\Http\Controllers\Dashboard\SellerController::class, 'status'])->name('status.sellering');
            Route::get('seller_prfile', [SellerDetlseController::class,'prfile'])->name('seller.prfile');
            Route::resource('categories', CategoryController::class);
            Route::resource('products', ProductController::class);
            Route::resource('slides', SlideController::class);
            Route::resource('pages', PageController::class);
            Route::resource('sizes', SizeController::class);
            Route::resource('users', UserController::class);
            Route::resource('stores', App\Http\Controllers\Dashboard\StoreController::class);
            Route::resource('coupons', CouponController::class)->except(['show']);
            Route::resource('offers', OfferController::class)->except(['show']);
            Route::resource('dashboard_orders', App\Http\Controllers\Dashboard\OrderController::class)->except(['create','update','edit']);
            Route::get('about/edit'  , [AboutController::class , 'edit'] )->name('about.edit');
            Route::patch('about'  , [AboutController::class , 'update'] )->name('about.update');
            Route::get('messages', [MessageController::class , 'index'])->name('messages.index');
            Route::get('messages/{message}', [MessageController::class , 'show'])->name('messages.show');
            Route::delete('messages/{message}', [MessageController::class , 'destroy'])->name('messages.destroy');
        });
    });



    Route::get('/register', [RegisterController::class  , 'create' ] )->name('users.register.form');
    Route::post('/register', [RegisterController::class  , 'store' ] )->name('users.register');


    Route::group(['middleware' => 'seller'], function() {

        
        
    });

    Route::get('/account', [UserProfileContoller::class , 'account'] )->name('user.account');
    Route::post('/account', [UserProfileContoller::class , 'update'] )->name('user.account.update');
    Route::get('/logout', [UserProfileContoller::class , 'logout'] )->name('user.account.logout');
    
    //login admin and seller get and post
    Route::get('/login'  , [LoginController::class , 'form'] )->name('user.login_form');
    Route::post('/login'  , [LoginController::class , 'login'])->name('user.login');

    //logout seller
    Route::post('seller.logout'  , [LoginController::class , 'seller_logout'])->name('seller.logout');

    

    Route::get('/subscribe'  ,[ HomeController::class , 'subscribe'] );


    Route::get('/aaa', function () {
        // return 100 - 1%;
        return session()->get('coupon_value');
    });    


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/about', [HomeController::class , 'about']);
    Route::get('/pages/{page}', [HomeController::class , 'page']);
    Route::get('/'  , [HomeController::class , 'index'] )->name('welcome.index');
    Route::get('/contact', [HomeController::class , 'contact'] );
    Route::get('/send_mail', [HomeController::class , 'contact_us'] );

    Route::get('/store/{id}', [HomeController::class , 'store'])->name('store');



    //store details
    Route::get('/store/{id}', [HomeController::class , 'store_details'])->name('store');


    //product details
    Route::get('/product/{id}', [HomeController::class , 'product_details'])->name('product.details');


    //rpute card
    Route::get('/cart', [CartController::class, 'cart_index'])->name('cart.index');
    Route::post('/cart.store/{id}', [CartController::class, 'add_cart'])->name('cart.store');
    Route::post('/cart_update/{id}', [CartController::class, 'update_cart'])->name('cart.update');
    Route::delete('/destroy_cart/{id}', [CartController::class, 'destroy_cart'])->name('cart.destroy');
    Route::post('/coupon_cart', [CartController::class, 'add_coupon_cart'])->name('cart.coupon');
    Route::get('/destroy_cart', [CartController::class, 'destroy_coupon_cart'])->name('cart.destroy.coupon');


    //route order
    Route::resource('orders', OrderController::class);
    Route::resource('sellers', SellerController::class);
    
    Route::group(['prefix' => 'myStore','middleware' => 'seller'], function() {


        //
        Route::get('/'  , [WelcomController::class , 'index'])->name('store.index');
        Route::post('darkmode'  , [WelcomController::class , 'darkmode'])->name('darkmode');
        Route::get('category_product/{id}'  , [SellerProductController::class , 'product'])->name('category.product');
        Route::post('show_product'  , [SellerProductController::class , 'show_product'])->name('show.product');
        Route::get('product.index'  , [SellerProductController::class , 'products_index'])->name('product.index');
        Route::get('prod_index'  , [SellerProductController::class , 'index'])->name('prod.index');
        Route::post('sellers.store.product'  , [SellerProductController::class , 'sellers_store_product'])->name('sellers.store.product');
        Route::delete('destroy/{id}'  , [SellerProductController::class , 'destroy'])->name('sellers.destroy.product');
        //route stores
        Route::resource('stores', StoreController::class)->except(['index']);
        Route::post('update.active'  , [StoreController::class , 'active'])->name('update.active');
        Route::get('stores.create'  , [StoreController::class , 'create'])->name('stores.create');
        //route setting
        Route::get('stores.create'  , [StoreController::class , 'create'])->name('stores.create');
        Route::post('profile.store'  , [SettingController::class , 'profile_store'])->name('profile.store');

        Route::get('/products/create' , function(){
            return view('store.products.create');
        });

        Route::get('/statistics' , function(){
            return view('store.statistics');
        });
        Route::get('/wallet' , function(){
            return view('store.wallet');
        });
        Route::get('/settings' , function(){
            return view('store.settings');
        });
        Route::get('/settings/payment' , function(){
            return view('store.settings-payment');
        });

        Route::get('/settings/verify' , function(){
            return view('store.verify');
        });

        Route::get('/stores/create' , function(){
            return view('store.stores.create');
        });
        Route::get('/stores/store' , function(){
            return view('store.stores.store');
        });

    });//enf prefix myStore

});//enf of LaravelLocalization

