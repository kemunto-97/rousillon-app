<?php

namespace App\Http\Controllers;
use Datatables;
use Illuminate\Http\Request;
use App\Models\expenses;
use Alert;

class ExpensesController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Expenses',
            'expenses' => expenses::all()->toArray(),
        );
        return view ('expenses.expenses', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Expense',
        );
        return view('expenses.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'expense' => 'required|max:255',
            'type' => 'required|max:255',
            'amount' => 'required|max:255',

        ]);
        $expenses = expenses::create($storeData);
        echo "Success";
    }
}
