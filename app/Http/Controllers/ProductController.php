<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Saare products list karne ke liye
    public function index()
    {

        // return view('welcome');
        $products = Product::all();
        return response()->json($products);
    }

    // Naya product add karne ke liye
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return response()->json(['message' => 'Product created successfully']);
    }
}