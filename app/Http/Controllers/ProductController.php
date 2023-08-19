<?php

namespace App\Http\Controllers;

use App\Models\Catalog\Product;

class ProductController extends Controller
{
    public function index(){
        $products=Product::where('stock',2)
                ->latest('id')
                ->paginate(8);
                
        return view('catalog.index', compact('products'));
    }
}
