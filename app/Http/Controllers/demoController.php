<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo_model;
class demoController extends Controller
{
    public function demo(){
       
        return view('demo');
    }
}
