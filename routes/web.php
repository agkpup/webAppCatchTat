<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\session\cartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('application.aboutUs');
})->name('aboutUs');

Route::get('/app-setting', function () {
    return view('application.appSetting');
})->name('appSetting');

Route::get('/category-page', function () {
    return view('application.categoryPage');
})->name('categoryPage');

Route::get('/check-out',[cartController::class,'addService'])->name('checkOut');

Route::get('/faq', function () {
    return view('application.faq');
})->name('faq');

Route::get('/favourite', function () {
    return view('application.favourite');
})->name('favourite');

Route::get('/filter-page', function () {
    return view('application.filterPage');
})->name('filterPage');

Route::get('/forget-password', function () {
    return view('application.forgetPassword');
})->name('forgetPassword');

Route::get('/home', function () {
    return view('application.homePage2_6');
})->name('home');

Route::get('/new-password', function () {
    return view('application.newPassword');
})->name('newPassword');

Route::get('/notification', function () {
    return view('application.notification');
})->name('notification');

Route::get('/on-board-screen', function () {
    return view('application.onBoardScreen2');
})->name('onBoardScreen');

Route::get('/partners-detail', function () {
    return view('application.partnersDetail');
})->name('partnerDetail');

Route::get('/payment-success', function () {
    return view('application.paymentSuccess');
})->name('paymentSuccess');

Route::get('/paypal', function () {
    return view('application.paypal');
})->name('paypal');

Route::get('/pick-up', function () {
    return view('application.pickUpPage');
})->name('pickUp');

Route::get('/product-rate', function () {
    return view('application.productRate');
})->name('productRate');

Route::get('/profile', function () {
    return view('application.profile');
})->name('profile');

Route::get('/review', function () {
    return view('application.review');
})->name('review');

Route::get('/search-page', function () {
    return view('application.searchPage');
})->name('searchPage');

Route::get('/select-interest', function () {
    return view('application.selectInterest5');
})->name('selectInterest');

Route::get('/select-language', function () {
    return view('application.selectLanguage');
})->name('select-language');

Route::get('/shopping-cart', function () {
    return view('application.shoppingCart');
})->name('shoppingCart');

Route::get('/single-category-page', function () {
    return view('application.currency');
})->name('currency');

Route::get('/single-product-page', function () {
    return view('application.singleProductPage');
})->name('singleProductPage');

Route::get('/terms-and-service', function () {
    return view('application.termsAndServices');
})->name('termsService');

Route::get('/track-orders', function () {
    return view('application.trackOrders');
})->name('trackOrders');

Route::get('/trending-page', function () {
    return view('application.trendingPage');
})->name('trendingPage');

Route::get('/verify-screen', function () {
    return view('application.verifyScreen');
})->name('verifyScreen');

Route::get('/wallet-page', function () {
    return view('application.walletPage');
})->name('walletPage');

Route::get('/splash-screen', function () {
    return view('application.splashScreen1');
})->name('splashScreen');

Route::get('/sign-in-screen', function () {
    return view('application.signInScreen');
})->name('signInScreen');

Route::get('/sign-up-screen', function () {
    return view('application.signUpScreen');
})->name('signUpScreen');
