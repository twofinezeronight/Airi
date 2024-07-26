<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class CartController extends Controller
{
    public function cart()
    {
        // Lấy thông tin giỏ hàng từ session
        $cart = session()->get('cart');
        // Khởi tạo giá trị mặc định cho shippingFee
        $shippingFee = 25000;
        // Trả về view 'pages.cart' với dữ liệu giỏ hàng
        return view('pages.cart', compact('cart'),['shippingFee' => $shippingFee]);
    }

    public function addToCart(Request $request)
    {
        // Lấy giỏ hàng hiện tại từ session, nếu chưa có thì tạo mới
        $cart = session()->get('cart', []);

        // Lấy ID sản phẩm từ request
        $productId = $request->id;

        // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($cart[$productId])) {
            // Nếu đã tồn tại, tăng số lượng sản phẩm
            $cart[$productId]['quantity']++;
        } else {
            // Nếu chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
            $cart[$productId] = [
                "id" => $request->id,
                "name" => $request->name,
                "img" => $request->img,
                "quantity" => $request->quantity,
                "price" => $request->price,
            ];
        }

        // Lưu giỏ hàng vào session
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeProduct($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]); // Xóa sản phẩm khỏi giỏ hàng

            session()->put('cart', $cart); // Cập nhật session giỏ hàng

            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }

    public function clearCart()
    {
        // Xóa toàn bộ giỏ hàng từ session
        session()->forget('cart');

        return redirect()->back()->with('success', 'Cart has been cleared successfully!');
    }


    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }


    


    
}
