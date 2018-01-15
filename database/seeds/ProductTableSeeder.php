<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([

        	'imagePath' => 'cookie.jpg',
        	'title' => 'Cookie',
        	'desc' => 'Freshly baked cookies for you',
        	'price' => 10

        	]); 
        $product -> save();



        $product = new \App\Product([

        	'imagePath' => 'cupcake.jpg',
        	'title' => 'Cupcake',
        	'desc' => 'Ikaw na ba ang icing sa ibabaw ng CUPCAKE ko',
        	'price' => 15

        	]); 
        $product -> save();


        $product = new \App\Product([

        	'imagePath' => 'donuts.jpg',
        	'title' => 'Glazed donuts',
        	'desc' => 'KK who? Best Glazed donuts eva',
        	'price' => 45

        	]); 
        $product -> save();

        $product = new \App\Product([

        	'imagePath' => 'cross.jpg',
        	'title' => 'Croissant',
        	'desc' => 'Best croissant now available',
        	'price' => 20

        	]); 
        $product -> save();


        $product = new \App\Product([

        	'imagePath' => 'cake.jpg',
        	'title' => 'Cake',
        	'desc' => 'Different flavors of cake! YUM',
        	'price' => 500

        	]); 
        $product -> save();


        $product = new \App\Product([

            'imagePath' => 'churros.jpg',
            'title' => 'Churros',
            'desc' => 'Churros from Mexico',
            'price' => 30

            ]); 
        $product -> save();

        $product = new \App\Product([

            'imagePath' => 'bread.jpg',
            'title' => 'Bread',
            'desc' => 'Tasty bread of the Philippines',
            'price' => 100

            ]); 
        $product -> save();


        $product = new \App\Product([

            'imagePath' => 'biscuit2.jpg',
            'title' => 'Biscuits',
            'desc' => 'Assorted biscuits',
            'price' => 5

            ]); 
        $product -> save();

    }
}
