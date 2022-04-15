<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function home(){
        $cats=Category::all();
        return view('home',compact('cats'));
    }
    

    

}
