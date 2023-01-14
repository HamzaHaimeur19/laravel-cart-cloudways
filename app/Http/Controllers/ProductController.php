<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // to get all products from database
        return view('shop.index', compact('products')); // view of shop file and compacting the products variable that is used to loop in the view
    }

    public function show($id)
    {
        return view('shop.show', [
            'product' => Product::findOrFail($id) // find the product by id and show it using the view show
        ]);
    }

}
