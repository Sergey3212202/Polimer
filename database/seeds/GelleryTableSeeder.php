<?php

use App\Gellery;
use App\Product;
use Illuminate\Database\Seeder;

class GelleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::all()->each(function ($product){
            $gellery = factory(Gellery::class)->create();
            $product->gellery()->save($gellery);
        });
    }
}
