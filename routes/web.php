<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderOfflineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserViewController;

Route::get('/',[UserViewController::class,'home'])->name('home');
Route::get('/about',[UserViewController::class,'about'])->name('about');
Route::get('/event',[UserViewController::class,'event'])->name('event');
Route::get('/product',[UserViewController::class,'product'])->name('product');
Route::get('/contact',[UserViewController::class,'contact'])->name('contact');
Route::get('/article',[UserViewController::class,'article'])->name('article');
Route::get('/article/{slug}',[UserViewController::class,'detailArticle'])->name('detail-article');
Route::middleware(['auth','verifieduser'])->group(function (){
    Route::get('to-checkout/{id}',[UserViewController::class,'toCheckout'])->name('to-checkout');
    Route::get('/checkout', [UserViewController::class,'checkoutPage'])->name('checkout');
    Route::get('/order', [UserViewController::class,'orderPage'])->name('order');
    Route::get('/delete-temp-order/{id}', [UserViewController::class,'deleteTempOrder'])->name('delete-temp-order');
    Route::post('/checkout', [UserViewController::class,'checkoutAction'])->name('checkout-action');
    Route::post('/change-address', [UserViewController::class,'changeAddress'])->name('change-address');
    Route::post('/upload-payment/{id}', [OrderController::class, 'uploadPayment'])->name('upload-payment-order');
});

Route::get('/monthly-revenue', [DashboardController::class, 'getMonthlyRevenue']);
Route::get('/yearly-revenue', [DashboardController::class, 'getYearlyRevenue']);
Route::middleware(['auth','ceklevel'])->prefix('/admin/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index-dashboard');
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index-dashboard-user');
        Route::get('/create', [UserController::class, 'create'])->name('create-dashboard-user');
        Route::post('/store', [UserController::class, 'store'])->name('store-dashboard-user');
        Route::put('/edit/{id}', [UserController::class, 'edit'])->name('edit-dashboard-user');
        Route::patch('/update/{id}', [UserController::class, 'update'])->name('update-dashboard-user');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete-dashboard-user');
        Route::get('/verify/{id}', [UserController::class, 'verifyUser'])->name('verify-dashboard-user');
    });
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index-dashboard-product');
        Route::get('/create', [ProductController::class, 'create'])->name('create-dashboard-product');
        Route::post('/store', [ProductController::class, 'store'])->name('store-dashboard-product');
        Route::put('/edit/{id}', [ProductController::class, 'edit'])->name('edit-dashboard-product');
        Route::patch('/update/{id}', [ProductController::class, 'update'])->name('update-dashboard-product');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('delete-dashboard-product');
    });
    Route::prefix('product-categories')->group(function () {
        Route::get('/', [ProductCategoryController::class, 'index'])->name('index-dashboard-product-category');
        Route::get('/create', [ProductCategoryController::class, 'create'])->name('create-dashboard-product-category');
        Route::post('/store', [ProductCategoryController::class, 'store'])->name('store-dashboard-product-category');
        Route::put('/edit/{id}', [ProductCategoryController::class, 'edit'])->name('edit-dashboard-product-category');
        Route::patch('/update/{id}', [ProductCategoryController::class, 'update'])->name('update-dashboard-product-category');
        Route::delete('/delete/{id}', [ProductCategoryController::class, 'destroy'])->name('delete-dashboard-product-category');
    });
    Route::prefix('employees')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index-dashboard-employee');
        Route::get('/create', [EmployeeController::class, 'create'])->name('create-dashboard-employee');
        Route::post('/store', [EmployeeController::class, 'store'])->name('store-dashboard-employee');
        Route::put('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit-dashboard-employee');
        Route::patch('/update/{id}', [EmployeeController::class, 'update'])->name('update-dashboard-employee');
        Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('delete-dashboard-employee');
    });
    Route::prefix('events')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index-dashboard-event');
        Route::get('/create', [EventController::class, 'create'])->name('create-dashboard-event');
        Route::post('/store', [EventController::class, 'store'])->name('store-dashboard-event');
        Route::put('/edit/{id}', [EventController::class, 'edit'])->name('edit-dashboard-event');
        Route::patch('/update/{id}', [EventController::class, 'update'])->name('update-dashboard-event');
        Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('delete-dashboard-event');
    });
    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index-dashboard-post');
        Route::get('/create', [PostController::class, 'create'])->name('create-dashboard-post');
        Route::post('/store', [PostController::class, 'store'])->name('store-dashboard-post');
        Route::put('/edit/{id}', [PostController::class, 'edit'])->name('edit-dashboard-post');
        Route::patch('/update/{id}', [PostController::class, 'update'])->name('update-dashboard-post');
        Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('delete-dashboard-post');
    });
    Route::prefix('order-offline')->group(function () {
        Route::get('/', [OrderOfflineController::class, 'index'])->name('index-dashboard-order-offline');
        Route::get('/create', [OrderOfflineController::class, 'create'])->name('create-dashboard-order-offline');
        Route::post('/store', [OrderOfflineController::class, 'store'])->name('store-dashboard-order-offline');
    });
    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index-dashboard-order');
        Route::get('/acc/{id}', [OrderController::class, 'acc'])->name('acc-dashboard-order');
        Route::get('/cancel/{id}', [OrderController::class, 'cancel'])->name('cancel-dashboard-order');
        Route::get('/antardekat/{id}', [OrderController::class, 'antarDekat'])->name('antardekat-dashboard-order');
        Route::get('/antarjauh/{id}', [OrderController::class, 'antarJauh'])->name('antarjauh-dashboard-order');
        Route::get('/paid/{id}', [OrderController::class, 'paid'])->name('paid-dashboard-order');
    });
});

Auth::routes();
