<?php
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;

Route::get('/latest-products', [ProductController::class, 'getLatestProducts']);
