<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class InvoiceController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Invoices',
            'invoices' => invoice::all()->toArray(),
        );
        return view ('invoices.invoices', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Invoice',
        );
        return view('invoices.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'order_id' => 'required|max:255',
            'customer_name' => 'required|max:255',
            'product_name' => 'required|max:255',
            'total_due' => 'required|max:255',
            'total_paid' => 'required|max:255',
        ]);
        $invoices = invoice::create($storeData);

    }
}
