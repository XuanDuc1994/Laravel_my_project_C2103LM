<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function create(){
        $cats=Category::all();
        return view('admin.products.product',compact('cats'));
    }
    public function add(Request $req){
       $req -> validate(
           [
               'name'=>'required|unique:product',
               'upload'=> 'required|mimes:jpeg,jpg,png,gif,bmp'
           ],
           [
               'upload.required'=>'file không trống',
               'upload.mimes'=>'định dạng file là:jpeg,jpg,png,gif,bmp',
           ]
           );
        $ext=$req->upload->extension();
        $file_name =time().'.'.$ext;
        $req =$req->only()
        $req->upload->move(public_path('uploads'),$file_name);
    
        dd($req->all());
    }
   
}
