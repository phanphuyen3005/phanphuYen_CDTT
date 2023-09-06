<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\contactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\menuController;
use App\Http\Controllers\backend\orderController;
use App\Http\Controllers\backend\postController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\sliderController;
use App\Http\Controllers\backend\topicController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/', [SiteController::class,'index'])->name('site.index');
Route::get('/san-pham', [SiteController::class,'product'])->name('site.product');
Route::get('/bai-viet', [SiteController::class,'post'])->name('site.post');
// Route::get('/gio-hang', function(){echo "Tất cả";});
// Route::get('/tim-kiem', function(){echo "Tất cả";});
// Route::get('/khach-hang', function(){echo "Tất cả";});
// Route::get('/lien-he', function(){echo "Tất cả";});






Route::get('/admin/login', [AuthController::class, 'getlogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'postlogin'])->name('admin.postlogin');
Route::prefix('admin')->middleware('loginAdmin')->group(function () {

    Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
    Route::get('/', [DashboardController::class,'index'])->name('admin.dashboard');

    //brand
    Route::resource('brand', BrandController::class);
    Route::get('brand_trash',[BrandController::class,'trash'])->name('brand.trash');
    Route::get('brand/status/{brand}',[BrandController::class,'status'])->name('brand.status');
    Route::get('brand/delete/{brand}',[BrandController::class,'delete'])->name('brand.delete');
    Route::get('brand/restore/{brand}',[BrandController::class,'restore'])->name('brand.restore');
    Route::get('brand/destroy/{brand}',[BrandController::class,'destroy'])->name('brand.destroy');

    //cat
    Route::resource('category', CategoryController::class);
    Route::get('category_trash',[CategoryController::class,'trash'])->name('category.trash');
    Route::get('category/status/{category}',[CategoryController::class,'status'])->name('category.status');
    Route::get('category/delete/{category}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('category/restore/{category}',[CategoryController::class,'restore'])->name('category.restore');
    Route::get('category/destroy/{category}',[CategoryController::class,'destroy'])->name('category.destroy');

    //product
    Route::resource('product', ProductController::class);
    Route::get('product_trash',[ProductController::class,'trash'])->name('product.trash');
    Route::get('product/status/{product}',[ProductController::class,'status'])->name('product.status');
    Route::get('product/delete/{product}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('product/restore/{product}',[ProductController::class,'restore'])->name('product.restore');
    Route::get('product/destroy/{product}',[ProductController::class,'destroy'])->name('product.destroy');

    //contact
    Route::resource('contact', ContactController::class);
    Route::get('contact_trash',[ContactController::class,'trash'])->name('contact.trash');
    Route::get('contact/status/{contact}',[ContactController::class,'status'])->name('contact.status');
    Route::get('contact/delete/{contact}',[ContactController::class,'delete'])->name('contact.delete');
    Route::get('contact/restore/{contact}',[ContactController::class,'restore'])->name('contact.restore');
    Route::get('contact/destroy/{contact}',[ContactController::class,'destroy'])->name('contact.destroy');

    //menu
    Route::resource('menu', MenuController::class);
    Route::get('menu_trash',[MenuController::class,'trash'])->name('menu.trash');
    Route::get('menu/status/{menu}',[MenuController::class,'status'])->name('menu.status');
    Route::get('menu/delete/{menu}',[MenuController::class,'delete'])->name('menu.delete');
    Route::get('menu/restore/{menu}',[MenuController::class,'restore'])->name('menu.restore');
    Route::get('menu/destroy/{menu}',[MenuController::class,'destroy'])->name('menu.destroy');

    //order
    Route::resource('order', OrderController::class);
    Route::get('order_trash',[OrderController::class,'trash'])->name('order.trash');
    Route::get('order/status/{order}',[OrderController::class,'status'])->name('order.status');
    Route::get('order/delete/{order}',[OrderController::class,'delete'])->name('order.delete');
    Route::get('order/restore/{order}',[OrderController::class,'restore'])->name('order.restore');
    Route::get('order/destroy/{order}',[OrderController::class,'destroy'])->name('order.destroy');

    //orderdetail
    Route::resource('orderdetail', OrderdetailController::class);
    Route::get('orderdetail_trash',[OrderdetailController::class,'trash'])->name('orderdetail.trash');
    Route::get('orderdetail/status/{orderdetail}',[OrderdetailController::class,'status'])->name('orderdetail.status');
    Route::get('orderdetail/delete/{orderdetail}',[OrderdetailController::class,'delete'])->name('orderdetail.delete');
    Route::get('orderdetail/restore/{orderdetail}',[OrderdetailController::class,'restore'])->name('orderdetail.restore');
    Route::get('orderdetail/destroy/{orderdetail}',[OrderdetailController::class,'destroy'])->name('orderdetail.destroy');

    //Slider
    Route::resource('slider', SliderController::class);
    Route::get('slider_trash',[SliderController::class,'trash'])->name('slider.trash');
    Route::get('slider/status/{slider}',[SliderController::class,'status'])->name('slider.status');
    Route::get('slider/delete/{slider}',[SliderController::class,'delete'])->name('slider.delete');
    Route::get('slider/restore/{slider}',[SliderController::class,'restore'])->name('slider.restore');
    Route::get('slider/destroy/{slider}',[SliderController::class,'destroy'])->name('slider.destroy');

    //post
    Route::resource('post', PostController::class);
    Route::get('post_trash',[PostController::class,'trash'])->name('post.trash');
    Route::get('post/status/{post}',[PostController::class,'status'])->name('post.status');
    Route::get('post/delete/{post}',[PostController::class,'delete'])->name('post.delete');
    Route::get('post/restore/{post}',[PostController::class,'restore'])->name('post.restore');
    Route::get('post/destroy/{post}',[PostController::class,'destroy'])->name('post.destroy');

    //topic
    Route::resource('topic', TopicController::class);
    Route::get('topic_trash',[TopicController::class,'trash'])->name('topic.trash');
    Route::get('topic/status/{topic}',[TopicController::class,'status'])->name('topic.status');
    Route::get('topic/delete/{topic}',[TopicController::class,'delete'])->name('topic.delete');
    Route::get('topic/restore/{topic}',[TopicController::class,'restore'])->name('topic.restore');
    Route::get('topic/destroy/{topic}',[TopicController::class,'destroy'])->name('topic.destroy');

    //
    Route::resource('user', UserController::class);
    Route::get('user_trash',[UserController::class,'trash'])->name('user.trash');
    Route::get('user/status/{user}',[UserController::class,'status'])->name('user.status');
    Route::get('user/delete/{user}',[UserController::class,'delete'])->name('user.delete');
    Route::get('user/restore/{user}',[UserController::class,'restore'])->name('user.restore');
    Route::get('user/destroy/{user}',[UserController::class,'destroy'])->name('user.destroy');

});







Route::get('{slug}', [SiteController::class,'index'])->name('site.slug');