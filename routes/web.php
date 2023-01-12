<?php

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

use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Front\About;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\Cart;
use App\Http\Controllers\Front\ContactFormController;
use App\Http\Controllers\Front\ContactUsForm;
use App\Http\Controllers\Front\FeedbackController;
use App\Http\Controllers\Front\FranchiseController;
use App\Http\Controllers\Front\homeController;
use App\Http\Controllers\Front\JoinUsController;
use App\Http\Controllers\Front\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;

Route::get('/lang/{lang}', [LanguageController::class, 'lang']);
//Route::get('/test', function () {
//    return view('test');
//})->name('test');


Route::group(['middleware' => 'web'], function () {



    /********************---------------FRONT ROUTES------------------************************/
    Route::group(['middleware' => 'lang'], function () {

        Route::get('/', 'Front\homeController@home')->name('home');
        Route::get('/home', 'Front\homeController@home');
        Route::get('/show/{slug}', 'Front\homeController@show')->name('front.show')
            ->where(['slug' => '[-A-Za-z0-9]+']);
        Route::get('/showCategory/{slug}', 'Front\homeController@showCategory')->name('front.showCategory')
            ->where(['slug' => '[-A-Za-z0-9]+']);
        Route::get('/showBrand/{slug}', 'Front\homeController@showBrand')->name('front.showBrand')
            ->where(['slug' => '[-A-Za-z0-9]+']);
        /*---------------Contact us------------------*/
        Route::post('/show/{slug}', [homeController::class, 'storeProductCommets'])->name('feed.store');
        /*---------------About us------------------*/
        Route::get('/about', [AboutController::class, 'index'])->name('about.index');
        /*---------------About us------------------*/
        // Route::get('/cart', function() {
        //     return view('Front.cart.cart');
        // });
        /*---------------franchise------------------*/
        Route::get('/franchise', 'Front\FranchiseController@index')->name('franchise.index');
        Route::post('/franchise', [FranchiseController::class, 'store'])->name('franchise.store');
        /*---------------Join us------------------*/
        Route::get('/join-us', 'Front\JoinUsController@index')->name('join-us.index');
        Route::post('/join-us', [JoinUsController::class, 'store'])->name('join-us.store');
        /*---------------Join us------------------*/
        Route::get('/contact', 'Front\ContactFormController@index')->name('contact.index');
        Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
        /*---------------Categories------------------*/
        Route::get('/categories', function() {
            return view('Front.categories.categories');
        });
        /*---------------Cart------------------*/
        Route::post('/', [App\Http\Controllers\Front\CartController::class, 'store'])->name('cart.store');

        /*---------------brands------------------*/
        Route::get('/brands', function() {
            return view('Front.brands.brands');
        });
        /*---------------favourite------------------*/
        Route::get('/favourite', function() {
            return view('Front.favourite.favourite');
        });
        /*---------------feedback------------------*/
        Route::get('/feedback', function() {
            return view('Front.feedback.feedback');
        });
        /*---------------single category------------------*/
        Route::get('/category', function() {
            return view('Front.categories.singleCategory');
        });
        /*---------------LISTS------------------*/
        Route::match(['get', 'post'], '/products', 'Front\homeController@productsList')->name('front.productsList');
        Route::match(['get', 'post'], '/products/{list}/{slug}', 'Front\homeController@list')->where([
            'list' => '[A-za-z]+',
            'slug' => '[-A-Za-z0-9]+'
        ])->name('front.lists');
    });

    /*---------------CHECKOUT------------------*/
    Route::get('/inter-checkout', 'Front\checkOutController@interCheckOut')->name('front.inter.checkout');
    Route::get('/checkout', 'Front\checkOutController@index')->name('front.checkout');
    Route::post('/checkout', 'Front\checkOutController@store')->name('front.checkout.store');
    Route::post('/checkout/address', 'Front\checkOutController@saveAddress')->name('front.address.store');
    Route::post('/checkout/orderStatus', 'Front\checkOutController@saveOrderStatus')->name('front.order.saveStatus');

    /*---------------PAY-PAL------------------*/
    Route::get('/payment', 'Front\PayPalController@payment')->name('payment');
    Route::get('/cancel', 'Front\PayPalController@cancel')->name('payment.cancel');
    Route::get('/payment/success', 'Front\PayPalController@success')->name('payment.success');
    Route::post('/paypal/notify', 'Front\PaypalController@notify')->name('paypal.notify');



    // /*---------------CART------------------*/
    // // Route::resource('/cart', 'Front\cartController')->except(['create', 'edit', 'update']);
    // Route::post('/cart/edit', 'Front\cartController@update')->name('cart.update');
    // Route::get('/carts/clear', 'Front\cartController@clear')->name('cart.clear');
    // Route::view('/empty-shopping-cart', 'Front.check-out.empty-cart')->name('cart.empty');

    /*---------------SEARCh------------------*/
    Route::get('/search', 'Front\homeController@search')->name('front.search');
    Route::get('/auto-complete', 'Front\homeController@autoComplete')->name('front.search.autoComplete');

    /*---------------TRACK ORDER------------------*/
    Route::post('/track-order', 'Front\homeController@trackOrder')->name('front.trackCode');

    /*---------------COMPARE------------------*/
    Route::get('/compare', 'Front\homeController@compare')->name('front.compare');
    Route::post('/compare-product', 'Front\homeController@compareProduct')->name('front.productsCompare');
    Route::delete('/compare/{name}', 'Front\homeController@removeCompare')->name('front.removeCompare');

    /*---------------AUTH------------------*/
    Auth::routes();

    /*---------------GOOGLE------------------*/
    Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

});


/*------------------------------FRONT AUTH ROUTES------------------*/
Route::group(['prefix' => 'account', 'middleware' => 'auth'], function () {

    /*---------------ACCOUNT------------------*/
    Route::get('/profile', 'Front\accountController@profile')->name('front.profile');
    Route::get('/my-orders', 'Front\accountController@myOrders')->name('front.myOrders');
    Route::get('/my-order/{id}', 'Front\accountController@showOrder')->name('front.myOrders.show');
    Route::put('/my-orders', 'Front\accountController@cancelOrder')->name('front.cancel.order');
    Route::get('/edit-address', 'Front\accountController@editAddress')->name('front.address.edit');
    Route::put('/edit-address', 'Front\accountController@updateAddress')->name('front.address.update');
    Route::get('/edit-order-address/{id}', 'Front\accountController@editOrderAddress')->name('front.order.address.edit');

    /*---------------COMMENTS------------------*/
    Route::post('comments', 'Admin\myCommentController@store')->name('comment.store');
    Route::match(['put', 'post'], 'comments/{comment}', '\Laravelista\Comments\CommentController@update');
//    Route::post('comments/{comment}', '\Laravelista\Comments\CommentController@reply');

    /*---------------FAVORITES------------------*/
    Route::post('/favorite', 'Front\accountController@favoritePost')->name('favorite');
    Route::post('/un-favorite', 'Front\accountController@unFavoritePost')->name('unfavorite');
    Route::get('/my-wish-list', 'Front\accountController@myFavorites')->name('my_favorites');

    /*---------------GIFT CARD------------------*/
    Route::post('/checkout/check-discount', 'Front\checkOutController@checkDiscount')->name('front.checkout.checkDiscount');

});

/*---------------***************ADMIN ROUTES******************------------------*/
Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function () {

    /*---------------USERS------------------*/
    Route::resource('/user', 'Admin\userController');
    Route::get('/user-address/{id}', 'Admin\userController@editAddress')->name('admin.address.edit');
    Route::put('/user-address/{id}', 'Admin\userController@updateAddress')->name('admin.address.update');

    /*---------------ROLES------------------*/
    Route::resource('roles', 'Admin\roleController');

    /*---------------SEARCH------------------*/
    Route::post('/search', 'Admin\dashboardController@search')->name('admin.search');

    /*---------------DASHBOARD------------------*/
    Route::get('/dashboard', 'Admin\dashboardController@index')->name('admin.dashboard');

    /*---------------Products Routes------------------*/
    Route::resource('product', 'Admin\productController');

    Route::get('/product/create/second-step','Admin\productController@createSecondStep')->name('product.create2');
    Route::post('/product/create/second-step','Admin\productController@storeSecondStep')->name('product.store2');

    Route::post('product/sort', 'Admin\productController@sort')->name('product.index.sort');
    Route::get('product/index/trash', 'Admin\productController@withTrash')->name('product.index.trash');
    Route::get('product/index/restore/{id}', 'Admin\productController@restore')->name('product.restore');
    Route::get('product/tags/{tag}', 'Admin\productController@productTags')->name('products.tags');

    /*---------------ATTRIBUTES ROUTES------------------*/
    Route::resource('attribute', 'Admin\attributeController')->except(['index', 'show']);
    Route::delete('attribute/value/{id}', 'Admin\attributeController@deleteValue')->name('attribute.deleteValue');
    //when create new attribute calling from show product
    Route::get('/attribute/createNew/{id}', 'Admin\attributeController@createNew')->name('attribute.createNew');

    /*---------------PHOTOS Routes------------------*/
    Route::resource('photo', 'Admin\PhotoController');

    /*---------------CATEGORIES ROUTE------------------*/
    Route::resource('category', Admin\categoryController::class);
    Route::post('category', 'Admin\categoryController@storeParentCategory')->name('category.storeParentCategory');

    /*---------------BRAND ROUT------------------*/
    Route::resource('brand', 'Admin\brandController')->except(['show']);

    /*---------------GIFT CARD------------------*/
    Route::resource('giftCard', 'Admin\giftCardController')->except(['show']);

    /*---------------****ORDERS****------------------*/
    Route::get('orders', 'Admin\orderController@index')->name('order.index');
    Route::get('not-sent-orders', 'Admin\orderController@notSent')->name('order.not_sent');
    Route::get('orders/{id}', 'Admin\orderController@show')->name('order.show');
    Route::delete('orders/{id}', 'Admin\orderController@destroy')->name('order.destroy');
    Route::delete('orders/orders-status/{id}', 'Admin\orderController@detailDestroy')->name('order.detail.destroy');
    Route::get('orders/status/{id}/{status}', 'Admin\orderController@status')->name('order.status');
//    Route::post('orders','Admin\orderController@sent')->name('order.sent');

    /*---------------****COMMENTS****------------------*/
    Route::get('/comments', 'Admin\myCommentController@index')->name('comments.index');
    Route::get('/comments/new', 'Admin\myCommentController@newComments')->name('comments.new');
    Route::post('/comments/{id}', 'Admin\myCommentController@approve')->name('comment.approve');
    Route::delete('/comments/{id}', 'Admin\myCommentController@destroy')->name('comment.destroy');
//    Route::delete('/comments/{comment}', '\Laravelista\Comments\CommentController@destroy');

    /*---------------PAYMENTS------------------*/
    Route::resource('/payment', 'Admin\PaymentController')->except(['edit', 'update', 'create', 'store']);
    Route::get('/failed-payments', 'Admin\PaymentController@failed')->name('payment.failed');

    /*---------------SITE SETTINGS------------------*/
    Route::resource('/settings', 'Admin\settingController')->except([
        'create', 'show', 'edit', 'destroy'
    ]);
    /*---------------SITE SETTINGS------------------*/
    Route::get('/contact', 'Admin\ContactController@index')->name('Admincontact.index');
    Route::get('/franchise', 'Admin\FranchiseController@index')->name('Adminfranchise.index');
    Route::get('/join-us', 'Admin\JoinUsController@index')->name('Adminjoin-us.index');

    Route::resource('/discounts',Admin\DiscountController::class);
    // Route::get('/discounts', 'Admin\DiscountController@index')->name('AdminDiscounts.index');
    // Route::post('/discounts', 'Admin\DiscountController@update')->name('AdminDiscounts.update');
    // Route::get('/discounts/edit/{id}', 'Admin\DiscountController@edit')->name('AdminDiscounts.edit');

});

