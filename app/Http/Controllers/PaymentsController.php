<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payments;

class PaymentsController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Payments',
            'payments' => payments::all()->toArray(),
        );
        return view ('payments.payments', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Payment',
        );
        return view('payments.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'invoice_id' => 'required|max:255',
            'transaction_id' => 'required|max:255',
            'payment_method' => 'required|max:255',
            'amount' => 'required|max:255',
        ]);
        $payments = payments::create($storeData);

    }
}
