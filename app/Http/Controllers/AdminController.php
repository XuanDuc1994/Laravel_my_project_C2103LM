<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class AdminController extends Controller
{
    public function admin(){
        
        return view('admin.loggin');
    }
    public function create(){
        
        return view('admin.create');
    }
    public function store( Request $req){
        $req->validate(
            ['name'=>'required|unique:categories|max:100|min:3'
        ],
        ['name.required'=>'Tên danh mục không để trống',
        'name.unique'=>'Tên danh mục đã được sử dụng',
        'name.max'=>'Tên danh mục tối đa 100 ký tự',
        'name.min'=>'Tên danh mục tối thiểu 3ký tự',
        ]
    );
        Category::create($req->only('name','status'));
       
        dd($req->all());
    }
   
}