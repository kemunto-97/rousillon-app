<?php

namespace App\Http\Controllers;
use Datatables;
use Illuminate\Http\Request;
use App\Models\categories;
use Alert;

class CategoriesController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Categories',
            'categories' => categories::all()->toArray(),
        );
        return view ('categories.categories', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Category',

        );
        return view('categories.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'category_name' => 'required|max:255',

        ]);
        $categories = categories::create($storeData);
        echo "Success";

    }
}
