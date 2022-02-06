<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $products = Product::orderBy('created_at','desc')->paginate(6);

        return view('welcome',compact('products'));

    }
}
