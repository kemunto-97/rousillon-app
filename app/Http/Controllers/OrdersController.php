<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;

class OrdersController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Orders',
            'orders' => orders::all()->toArray(),
        );
        return view ('orders.orders', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Order',
        );
        return view('orders.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'product_id' => 'required|max:255',
            'product_name' => 'required|max:255',
            'product_price' => 'required|max:255',
        ]);
        $orders = orders::create($storeData);

    }
}
