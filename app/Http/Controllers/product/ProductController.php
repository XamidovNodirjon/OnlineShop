<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'nullable|boolean',
            'user_id' => 'required|exists:users,id',
        ]);


        $imagePath = $request->file('image')->store('products', 'public');

        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'is_active' => $request->input('is_active', true),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

}
