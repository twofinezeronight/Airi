<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function orders()
    {
        $cart = session()->get('cart', []);
        $totalPrice = 0;
        $shippingFee = 25000;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        $alltoltalPrice = $totalPrice + $shippingFee;
        return view('pages.checkout', compact('cart', 'totalPrice', 'shippingFee', 'alltoltalPrice'));
    }


    public function createCustomer(Request $request)
    {

        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'billing_fname' => 'required|string|max:255',
            'billing_lname' => 'required|string|max:255',
            'billing_streetAddress' => 'required|string|max:255',
            'billing_city' => 'required|string|max:255',
            'billing_phone' => 'required|string|max:15',
            'billing_email' => 'required|email|unique:customers,email|max:255',
            'orderNotes' => 'nullable|string',
            'payment-method' => 'required|string',
        ]);
        // Kiểm tra xem khách hàng đã chọn tạo tài khoản hay không
        $createAccount = $request->has('create_account');

        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Tính tổng giá trị đơn hàng từ giỏ hàng
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        $shippingFee = 25000;
        $alltoltalPrice = $totalPrice + $shippingFee;
        // Sử dụng transaction để đảm bảo tính toàn vẹn dữ liệu
        DB::transaction(function () use ($validatedData, $alltoltalPrice, $cart) {
            // Kiểm tra xem khách hàng đã tồn tại chưa dựa trên email
            $customer = Customer::where('email', $validatedData['billing_email'])->first();
            // Tạo khách hàng
            if (!$customer) {
                $customer = Customer::create([
                    'first_name' => $validatedData['billing_fname'],
                    'last_name' => $validatedData['billing_lname'],
                    'street_address' => $validatedData['billing_streetAddress'],
                    'city' => $validatedData['billing_city'],
                    'phone' => $validatedData['billing_phone'],
                    'email' => $validatedData['billing_email'],
                    'order_notes' => $validatedData['orderNotes'],
                ]);
            }
            session()->put('customer_id', $customer->id);

            // Tạo đơn hàng
            $order = Order::create([
                'customer_id' => $customer->id,
                'total' => $alltoltalPrice,
                'status' => 'pending',
                'payment_method' => $validatedData['payment-method'],
            ]);
            foreach ($cart as $item) {
                if (!isset($item['id'])) {
                    // Xử lý lỗi ở đây, ví dụ: bỏ qua phần tử hoặc hiển thị thông báo lỗi
                } else {
                    OrderProduct::create([
                        'order_id' => $order->id,
                        'product_id' => $item['id'],
                        'quantity' => $item['quantity']
                    ]);
                }
            }
            session()->put('order_id', $order->id);
        });

        // Xóa giỏ hàng khỏi session sau khi tạo đơn hàng
        session()->forget('cart');

        // Chuyển hướng người dùng đến trang cảm ơn hoặc xác nhận đơn hàng
        return redirect()->route('thankyou')->with('success', 'Customer and Order created successfully!');
    }

    public function thankyou()
    {
        // Lấy thông tin khách hàng và đơn hàng từ session
        $customerId = session()->get('customer_id');
        $orderId = session()->get('order_id');
        $orderProducts = OrderProduct::where('order_id', $orderId)->with('product')->get();
        // Lấy thông tin từ database
        $customer = Customer::find($customerId);
        $order = Order::find($orderId);
        // Kiểm tra xem có order và customer không
        if (!$order || !$customer) {
            abort(404); // Hoặc xử lý tùy thuộc vào yêu cầu của bạn
        }
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);
        $shippingFee = 25000;
        // Truyền dữ liệu vào view và hiển thị
        return view('pages.thankyou', compact('order', 'customer', 'orderProducts', 'shippingFee'));
    }

    public function orders_list()
    {
        $orders = Order::with('customer', 'orderProducts.product')->get();
        return view('admin.pages.orders', compact('orders'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'status' => 'required|string',
        ]);

        $order->status = $validatedData['status'];
        $order->save();

        return redirect()->route('orders_list')->with('success', 'Order status updated successfully.');
    }

    public function deleteOrder(Order $order)
    {
        $order->delete();

        return redirect()->route('orders_list')->with('success', 'Order deleted successfully.');
    }

    public function order_tracking()
    {
        return view('pages.order_tracking');
    }

    public function trackOrder(Request $request)
    {
        $shippingFee = 25000;

        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'order_id' => 'required',
        ]);

        // Truy vấn cơ sở dữ liệu để tìm đơn hàng
        $order = Order::find($validatedData['order_id']);

        // Kiểm tra xem có đơn hàng nào phù hợp hay không
        if ($order) {
            // Hiển thị thông tin đơn hàng cho người dùng
            return view('pages.track_order', compact('order', 'shippingFee'));
        } else {
            // Hiển thị thông báo cho người dùng biết rằng không tìm thấy đơn hàng
            return view('order_not_found');
        }
    }
}
