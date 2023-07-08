<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'dimension' => 'XL',
            'name' => 'Baju Polo',
            'price' => '10000',
            'image' => '1.jpg',
            'brand_id' => 1,
            'product_type'=> 1,
        ]);
        DB::table('products')->insert([
            'dimension' => 'M',
            'name' => 'T-shirt Oversized',
            'price' => '1000000',
            'image' => '1.jpg',
            'brand_id' => 3,
            'product_type'=> 1,
        ]);
        DB::table('products')->insert([
            'dimension' => 'M',
            'name' => 'Baju Polos',
            'price' => '119000',
            'image' => '1.jpg',
            'brand_id' => 3,
            'product_type'=> 4,
        ]);
        DB::table('products')->insert([
            'dimension' => 'S',
            'name' => 'Jeans Slim fit',
            'price' => '599000',
            'image' => '1.jpg',
            'brand_id' => 4,
            'product_type'=> 2,
        ]);
        DB::table('products')->insert([
            'dimension' => '600ml',
            'name' => 'Soap',
            'price' => '120000',
            'image' => '1.jpg',
            'brand_id' => 5,
            'product_type'=> 6,
        ]);
        DB::table('products')->insert([
            'dimension' => 'ALL FIT',
            'name' => 'Sweatshirt',
            'price' => '100000',
            'image' => '1.jpg',
            'brand_id' => 4,
            'product_type'=> 5,
        ]);
        DB::table('products')->insert([
            'dimension' => 'L',
            'name' => 'shirt',
            'price' => '1190000',
            'image' => '1.jpg',
            'brand_id' => 3,
            'product_type'=> 4,
        ]);
        DB::table('products')->insert([
            'dimension' => '250ml',
            'name' => 'Serum',
            'price' => '130000',
            'image' => '1.jpg',
            'brand_id' => 6,
            'product_type'=> 7,
        ]);
        DB::table('products')->insert([
            'dimension' => '43',
            'name' => 'Onitsuka Tiger Mexico',
            'price' => '1200000',
            'image' => '1.jpg',
            'brand_id' => 7,
            'product_type'=> 8,
        ]);
        DB::table('products')->insert([
            'dimension' => 'L',
            'name' => 'Uniqlo Bowling Shirt',
            'price' => '150000',
            'image' => '1.jpg',
            'brand_id' => 3,
            'product_type'=> 1,
        ]);
    }
}
