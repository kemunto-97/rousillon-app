<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class CustomersController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Customers',
            'customers' => customers::all()->toArray(),
        );
        return view ('customers.customers', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Customer',
        );
        return view('customers.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'customer_name' => 'required|max:255',
            'customer_email' => 'required|max:255',
            'customer_phone' => 'required|max:255',

        ]);
        $customers = customers::create($storeData);

    }
}
