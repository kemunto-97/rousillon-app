<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Menus',
            'menus' => menu::all()->toArray(),
        );
        return view ('menus.menus', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Menu',
        );
        return view('menus.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'product_name' => 'required|max:255',
            'description' => 'required|max:255',
            'product_price' => 'required|max:255',
            'age_status' => 'required|max:255',
        ]);
        $menus = menu::create($storeData);

    }
}
