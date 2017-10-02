<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    $product = new \App\Product([
    	'imagePath' => 'https://i0.wp.com/images.phpgang.com/2016/03/Learning-PHP-A-Pain-Free-Introduction-to-Building-Interactive-Websites.jpg?resize=381%2C499',
    	'title' => 'Learning PHP',
    	'description' => 'PHP 7 Book',
    	'price' => 150
    ]);
    $product->save();

    $product = new \App\Product([
    	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51Y10abOdVL._SX376_BO1,204,203,200_.jpg',
    	'title' => 'HTML5',
    	'description' => 'Definitive HTML5 Book',
    	'price' => 100
    ]);
    $product->save();

    $product = new \App\Product([
    	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/415yj4wFDrL._SX387_BO1,204,203,200_.jpg',
    	'title' => 'CSS3',
    	'description' => 'Quickstart CSS3',
    	'price' => 110
    ]);
    $product->save();

    $product = new \App\Product([
    	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/41oa41LdNdL._SX400_BO1,204,203,200_.jpg',
    	'title' => 'JavaScript & jQuery',
    	'description' => 'Interactive Front-End Development',
    	'price' => 140
    ]);
    $product->save();

    $product = new \App\Product([
    	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/411eIi5NLEL._SX389_BO1,204,203,200_.jpg',
    	'title' => 'MySql',
    	'description' => 'MySql Developer Library',
    	'price' => 120
    ]);
    $product->save();   
  }
}
