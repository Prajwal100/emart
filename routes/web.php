<?php

use Illuminate\Support\Facades\Route;

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

//Frontend Section
Route::get('/',[\App\Http\Controllers\IndexController::class,'home'])->name('home');

//User auth section
Route::get('user/login',[\App\Http\Controllers\IndexController::class,'userLoginForm'])->name('user.login.form');
Route::get('user/register',[\App\Http\Controllers\IndexController::class,'userRegisterForm'])->name('user.register.form');

Route::post('user/login',[\App\Http\Controllers\IndexController::class,'userLoginSubmit'])->name('user.login.submit');
Route::post('user/register',[\App\Http\Controllers\IndexController::class,'userRegisterSubmit'])->name('user.register.submit');


Route::get('user/logout',[\App\Http\Controllers\IndexController::class,'userLogout'])->name('user.logout');
//product category
Route::get('product-category/{slug}/',[\App\Http\Controllers\IndexController::class,'productCategory'])->name('product.category');

//Product details
Route::get('product-detail/{slug}/',[\App\Http\Controllers\IndexController::class,'productDetail'])->name('product.detail');

//aboutus
Route::get('about-us',[\App\Http\Controllers\IndexController::class,'aboutUs'])->name('about.us');

//contact
Route::get('contact',[\App\Http\Controllers\IndexController::class,'contact'])->name('contact');

//shop
Route::get('shop',[\App\Http\Controllers\IndexController::class,'shop'])->name('shop');
Route::post('shop-filter',[\App\Http\Controllers\IndexController::class,'shopFilter'])->name('shop.filter');

//cart
Route::get('cart',[\App\Http\Controllers\Frontend\CartController::class,'index'])->name('cart');
Route::post('cart/store',[\App\Http\Controllers\Frontend\CartController::class,'cartStore'])->name('cart.store');
Route::post('cart/delete',[\App\Http\Controllers\Frontend\CartController::class,'cartDelete'])->name('cart.delete');

//wishlist
Route::get('wishlist',[\App\Http\Controllers\IndexController::class,'wishlist'])->name('wishlist');


//checkout
Route::get('checkout',[\App\Http\Controllers\IndexController::class,'checkout'])->name('checkout');


//blog
Route::get('blog',[\App\Http\Controllers\IndexController::class,'blog'])->name('blog');





//End frontend section

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//Admin dashboard

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
   Route::get('/',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');

    // Banner Section
    Route::resource('/banner',\App\Http\Controllers\BannerController::class);
    Route::post('banner_status',[\App\Http\Controllers\BannerController::class,'bannerStatus'])->name('banner.status');

    // Category Section
    Route::resource('/category',\App\Http\Controllers\CategoryController::class);
    Route::post('category_status',[\App\Http\Controllers\CategoryController::class,'categoryStatus'])->name('category.status');

    Route::post('category/{id}/child',[\App\Http\Controllers\CategoryController::class,'getChildByParentID']);

    // Brand Section
    Route::resource('/brand',\App\Http\Controllers\BrandController::class);
    Route::post('brand_status',[\App\Http\Controllers\BrandController::class,'brandStatus'])->name('brand.status');

    // Product Section
    Route::resource('/product',\App\Http\Controllers\ProductController::class);
    Route::post('product_status',[\App\Http\Controllers\ProductController::class,'productStatus'])->name('product.status');

    // User Section
    Route::resource('/user',\App\Http\Controllers\UserController::class);
    Route::post('user_status',[\App\Http\Controllers\UserController::class,'userStatus'])->name('user.status');

});

//Vendor dashboard
Route::group(['prefix'=>'seller','middleware'=>['auth','seller']],function() {
    Route::get('/',[\App\Http\Controllers\SellerController::class,'index'])->name('seller');
});
