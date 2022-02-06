<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminController extends Controller
{
    public function index(){
        $chart_options = [
            'chart_title' => 'Пользователей за месяц',
            'report_type' => 'group_by_date',
            'model' => 'App\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'color' =>'red',
        ];
        $chart1 = new LaravelChart($chart_options);
        $product_count = Product::all()->count();
        $user_count = User::all()->count();
        return view('admin.index',['product_count' =>  $product_count],['chart1'=>$chart1 , 'user_count' => $user_count]);
    }
}
