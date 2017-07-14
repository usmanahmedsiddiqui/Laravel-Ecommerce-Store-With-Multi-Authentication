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

              'imagepath' =>'/images/2.png',
              'title' =>'Core II',
              'description'=>'This is Core II',
              'price'=>20

        	]);
        $product ->save();


 $product = new \App\Product([

              'imagepath' =>'/images/3.png',
              'title' =>'Proto',
              'description'=>'This is Proto',
              'price'=>30

        	]);
        $product ->save();




 $product = new \App\Product([

              'imagepath' =>'/images/4.png',
              'title' =>'Proto Plus',
              'description'=>'This is Proto Plus',
              'price'=>40

        	]);
        $product ->save();









 $product = new \App\Product([

              'imagepath' =>'/images/5.png',
              'title' =>'Dreamer',
              'description'=>'This is Dreamer',
              'price'=>50

        	]);
        $product ->save();










 $product = new \App\Product([

              'imagepath' =>'/images/6.png',
              'title' =>'Finder',
              'description'=>'This is Finder',
              'price'=>60

        	]);
        $product ->save();








 $product = new \App\Product([

              'imagepath' =>'/images/7.png',
              'title' =>'Guider',
              'description'=>'This is Guider',
              'price'=>70

        	]);
        $product ->save();









 





    }
}
