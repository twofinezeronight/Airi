<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShippingController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Route;
    

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// dashboarh này là trang lúc đầu đăng nhập nó sẽ vào, profile mới là trang sửa thông tin
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::middleware(['auth', CheckAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/products', [ProductController::class, 'products'])->name('products');
    Route::get('/admin/add_product', [ProductController::class, 'add_product'])->name('add_product');
    Route::post('/admin/productadd', [ProductController::class, 'productadd'])->name('productadd');
    Route::get('/admin/productdelete/{id}', [ProductController::class, 'productdelete'])->name('productdelete');
    Route::get('/admin/productedit/{id}', [ProductController::class, 'productedit'])->name('productedit');
    Route::post('/admin/productupdate', [ProductController::class, 'productupdate'])->name('productupdate');
    Route::get('/admin/orders_list', [OrderController::class, 'orders_list'])->name('orders_list');
    Route::post('/admin/orders_list/{order}', [OrderController::class, 'updateStatus'])->name('updateStatus');
    Route::delete('/admin/orders_list/{order}', [OrderController::class, 'deleteOrder'])->name('deleteOrder');
    
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/shop/detail/{product_id}', [ProductController::class, 'product_detail'])->name('product_detail');
Route::get('/categories/{category_id}', [ProductController::class, 'shop'])->name('categories');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('addToCart');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeProduct'])->name('removeProduct');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('clearCart');
Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('updateCart');

Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
// Route::post('/orders/createOrder', [OrderController::class, 'createOrder'])->name('createOrder');
Route::post('/create-customer', [OrderController::class, 'createCustomer'])->name('createCustomer');
Route::get('/thankyou', [OrderController::class, 'thankyou'])->name('thankyou');
Route::get('/order_tracking', [OrderController::class, 'order_tracking'])->name('order_tracking');
Route::post('/trackOrder', [OrderController::class, 'trackOrder'])->name('trackOrder');







require __DIR__ . '/auth.php';
