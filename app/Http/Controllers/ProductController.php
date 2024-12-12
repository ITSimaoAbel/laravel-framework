<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('welcome',['products' => $products]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {

        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->expiration_date = $request->expiration_date;

        $product->save();

        return redirect('/')->with('msg', 'Medicamento cadastrado com sucesso!');
    }
}
