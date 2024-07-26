<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function shop(Request $request)
    {
        $kyw = $request->input('query');
        $category_id = $request->input('category_id');
        $categories = Category::orderBy('name', 'asc')->get();
        if ($request->category_id) {
            $products = Product::where('category_id', $request->category_id)->paginate(8);
        } else {
            $products = Product::orderBy('id', 'desc')->paginate(8);
        }
        return view('pages.shop', compact('products', 'categories', 'kyw', 'category_id'));
    }

    public function product_detail(Request $request)
    {
        if ($request->product_id) {
            $product = Product::find($request->product_id);
            $related = Product::where('category_id', $product->category_id)->where('id', '<>', $product->id)->get();
        }
        return view('pages.product_detail', compact('product', 'related'));
    }

    public function search(Request $request)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $kyw = $request->input('query');
        $category_id = $request->input('category_id');
        $products = Product::where('name', 'LIKE', "%$kyw%")->orWhere('description', 'LIKE', "%$kyw%")->orderBy('id', 'desc')->paginate(8);
        return view('pages.shop', compact('products', 'categories', 'kyw', 'category_id'));
    }

    public function products()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $products = Product::orderBy('id', 'desc')->paginate(7);
        return view('admin.pages.products', compact('categories', 'products'));
    }

    public function add_product()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.pages.add_product', compact('categories', 'products'));
    }

    public function productadd(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required | string | max:255',
            'price' => 'required | numeric',
            'category_id' => 'required | integer | exists:categories,id',
            'img' => 'required | file | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('assets/img/products'), $imageName);
            $validateData['img'] = $imageName;
        }
        $products = Product::create($validateData);
        return redirect()->route('products');
    }

    public function productdelete($id)
    {
        $product = Product::find($id);
        $imgpath = 'assets/img/products' . $product->img;
        if (file_exists($imgpath)) {
            unlink($imgpath);
        }
        $product->delete();
        return redirect()->route('products');
    }

    public function productedit($id)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $products = Product::orderBy('id', 'desc')->get();
        $product = Product::find($id);
        return view('admin.pages.edit_product', compact('categories', 'products', 'product'));
    }

    public function productupdate(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $id = $request->id;
        $product = Product::findOrFail($id);

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('assets/img/products'), $imageName);
            $validateData['img'] = $imageName;
            $oldImgpath = "assets/img/products" . $product->img;
            if (file_exists($oldImgpath)) {
                unlink($oldImgpath);
            }
        }


        $product->update($validateData);

        return redirect()->route('products')->with('success', 'Product updated successfully');
    }

    public function getLatestProducts()
    {
        $latestProducts = Product::getLatestProducts();
        return response()->json($latestProducts);
    }

}
