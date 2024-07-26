<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $newProducts = Product::orderBy('created_at', 'desc')->take(9)->get();
        $bestsellerProducts = Product::orderBy('sold', 'desc')->take(9)->get();
        $inStockProducts = Product::orderBy('quantity', 'desc')->take(9)->get();
        return view('pages.home', compact('newProducts','bestsellerProducts', 'inStockProducts'));
    }
}
