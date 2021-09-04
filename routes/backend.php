<?php


Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[\App\Http\Controllers\Auth\Admin\LoginController::class,'showLoginForm'])->name('admin.login.form');
    Route::post('/login',[\App\Http\Controllers\Auth\Admin\LoginController::class,'login'])->name('admin.login');
});
//Admin dashboard

Route::group(['prefix'=>'admin','middleware'=>['admin']],function(){
    Route::get('/',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');

    Route::get('aboutus',[\App\Http\Controllers\AboutusController::class,'index'])->name('about.index');

    Route::put('aboutus-update',[\App\Http\Controllers\AboutusController::class,'aboutUpdate'])->name('about.update');


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

    // Product Attribute section
    Route::post('product-attribute/{id}',[\App\Http\Controllers\ProductController::class,'addProductAttribute'])->name('product.attribute');
    Route::delete('product-attribute-delete/{id}',[\App\Http\Controllers\ProductController::class,'addProductAttributeDelete'])->name('product.attribute.destroy');
    // User Section
    Route::resource('/user',\App\Http\Controllers\UserController::class);
    Route::post('user_status',[\App\Http\Controllers\UserController::class,'userStatus'])->name('user.status');

    // Coupon Section
    Route::resource('/coupon',\App\Http\Controllers\CouponController::class);
    Route::post('coupon_status',[\App\Http\Controllers\CouponController::class,'couponStatus'])->name('coupon.status');

    // Shipping Section
    Route::resource('/shipping',\App\Http\Controllers\ShippingController::class);
    Route::post('shipping_status',[\App\Http\Controllers\ShippingController::class,'shippingStatus'])->name('shipping.status');

    // Currency Section
    Route::resource('/currency',\App\Http\Controllers\CurrencyController::class);
    Route::post('currency_status',[\App\Http\Controllers\CurrencyController::class,'currencyStatus'])->name('currency.status');

    // Order Section
    Route::resource('order',\App\Http\Controllers\OrderController::class);
    Route::post('order-status',[\App\Http\Controllers\OrderController::class,'orderStatus'])->name('order.status');

    //Setting section
    Route::get('settings',[\App\Http\Controllers\SettingsController::class,'settings'])->name('settings');
    Route::put('settings',[\App\Http\Controllers\SettingsController::class,'settingsUpdate'])->name('settings.update');

    //Setting section
    Route::get('settings',[\App\Http\Controllers\SettingsController::class,'settings'])->name('settings');
    Route::put('settings',[\App\Http\Controllers\SettingsController::class,'settingsUpdate'])->name('settings.update');

    // Seller Section
    Route::resource('seller',\App\Http\Controllers\SellerController::class);
    Route::post('seller-status',[\App\Http\Controllers\SellerController::class,'sellerStatus'])->name('seller.status');
    Route::post('seller-verified',[\App\Http\Controllers\SellerController::class,'sellerVerified'])->name('seller.verified');

    //SMTP section
    Route::get('smtp',[\App\Http\Controllers\SettingsController::class,'smtp'])->name('smtp');
    Route::post('smtp-update',[\App\Http\Controllers\SettingsController::class,'smtpUpdate'])->name('smtp.update');

});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

