<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $product_count = Product::all()->count();
        $user_count = User::all()->count();
        return view('admin.index',['product_count' =>  $product_count],['user_count'=> $user_count]);
    }
}
