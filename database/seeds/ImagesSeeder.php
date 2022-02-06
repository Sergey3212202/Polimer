<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Gellery::all()->each(function ($gellery){
            $images = factory(\App\Image::class,4 )->create();
            $gellery->images()->saveMany($images);
        });
    }
}
