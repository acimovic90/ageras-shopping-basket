<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new \App\Product([
           'name' => 'Carlsberg',
           'image' => 'https://www.glengarrywines.co.nz/images/v9/bottles/91510.png',
           'price' => 5
       ]);
       $product->save();

       $product = new \App\Product([
           'name' => 'Tuborg',
           'image' => 'http://liquorsky.com/wp-content/uploads/2015/07/BE32.png',
           'price' => 3
       ]);
       $product->save();

       $product = new \App\Product([
           'name' => 'Guinness',
           'image' => 'http://www.brewbound.co.nz/content/images/thumbs/0001788_guinness-draught-6-pack-bottles_550.png',
           'price' => 7
       ]);
       $product->save();

    }
}
