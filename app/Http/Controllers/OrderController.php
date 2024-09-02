<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{
    public function index()
    {
        // Menggunakan cache untuk menyimpan hasil query
        $orders = Cache::remember('orders_with_products', 60, function () {
            return Order::with('products')->get();
        });

        // Mengirim data ke view
        return view('orders.index', compact('orders'));
    }
}
