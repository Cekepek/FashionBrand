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
            'image' => 'https://underarmour.scene7.com/is/image/Underarmour/PS1290140-600_HF?rp=standard-0pad|pdpMainDesktop&scl=1&fmt=jpg&qlt=85&resMode=sharp2&cache=on,on&bgc=F0F0F0&wid=566&hei=708&size=566,708',
            'brand_id' => 1,
            'product_type'=> 1,
        ]);
        DB::table('products')->insert([
            'dimension' => 'M',
            'name' => 'T-shirt Oversized',
            'price' => '1000000',
            'image' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/425974/sub/goods_425974_sub14.jpg?width=494',
            'brand_id' => 3,
            'product_type'=> 1,
        ]);
        DB::table('products')->insert([
            'dimension' => 'M',
            'name' => 'Baju Polos',
            'price' => '119000',
            'image' => 'https://saint-laurent.dam.kering.com/m/566596706657061e/Medium-464572YB2DQ1000_A.jpg?v=5',
            'brand_id' => 3,
            'product_type'=> 4,
        ]);
        DB::table('products')->insert([
            'dimension' => 'S',
            'name' => 'Jeans Slim fit',
            'price' => '599000',
            'image' => 'https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F8d%2F1e%2F8d1e26f292a30ddc05c316e7c63a65b4470cac13.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]',
            'brand_id' => 4,
            'product_type'=> 2,
        ]);
        DB::table('products')->insert([
            'dimension' => '600ml',
            'name' => 'Soap',
            'price' => '120000',
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/MTA-1031476/palmolive_palmolive-naturals-milk-and-honey-shower-milk-sabun-mandi-susu--1l-_full06.jpg',
            'brand_id' => 5,
            'product_type'=> 6,
        ]);
        DB::table('products')->insert([
            'dimension' => 'ALL FIT',
            'name' => 'Sweatshirt',
            'price' => '100000',
            'image' => 'https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F46%2F39%2F463947b40a5691af9b56151e3e39ace6ad7c34a1.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]',
            'brand_id' => 4,
            'product_type'=> 5,
        ]);
        DB::table('products')->insert([
            'dimension' => 'L',
            'name' => 'shirt',
            'price' => '1190000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_XX-UArlw9xgnlj0wWmDQmKGv3KwzJyNLSQ&usqp=CAU',
            'brand_id' => 3,
            'product_type'=> 4,
        ]);
        DB::table('products')->insert([
            'dimension' => '250ml',
            'name' => 'Serum',
            'price' => '130000',
            'image' => 'https://images.soco.id/668-6-varian-serum-skintific.jpg.jpeg',
            'brand_id' => 6,
            'product_type'=> 7,
        ]);
        DB::table('products')->insert([
            'dimension' => '43',
            'name' => 'Onitsuka Tiger Mexico',
            'price' => '1200000',
            'image' => 'https://images.asics.com/is/image/asics/1183A872_200_SB_Z2_GLB-2?$product$',
            'brand_id' => 7,
            'product_type'=> 8,
        ]);
        DB::table('products')->insert([
            'dimension' => 'L',
            'name' => 'Uniqlo Bowling Shirt',
            'price' => '150000',
            'image' => 'https://media.karousell.com/media/photos/products/2020/01/03/uniqlo_bowling_shirt_1578053202_cf5b850d.jpg',
            'brand_id' => 3,
            'product_type'=> 1,
        ]);
    }
}
