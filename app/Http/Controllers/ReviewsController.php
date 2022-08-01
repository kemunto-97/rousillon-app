<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reviews;

class ReviewsController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Reviews',
            'reviews' => reviews::all()->toArray(),
        );
        return view ('reviews.reviews', $data);
    }
    public function create(){
        $data = array(
            'title' => 'New Review',
        );
        return view('reviews.create')->with($data);
    }
    public function save(Request $request) {
        $storeData = $request->validate([

            'customer_name' => 'required|max:255',
            'content' => 'required|max:255',
        ]);
        $reviews = reviews::create($storeData);

    }
}
