<?php

namespace App\Http\Controllers;

use App\Product;
use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function size(){
        $sizes = Size::with('size_product')->get();
        return view('size',compact('sizes'));
    }
}
