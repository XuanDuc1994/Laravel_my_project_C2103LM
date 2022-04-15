<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(){
        $pros=Product::all();
        return view('product',compact('pros'));
    }
}
