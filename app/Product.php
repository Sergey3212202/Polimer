<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filltable = ['title', 'slug', 'description', 'price', 'barcode', 'stock', 'cover'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function gellery()
    {
        return $this->hasOne(Gellery::class);
    }
    public function Orderitem()
    {
        return $this->hasOne(OrderItem::class);
    }
}
