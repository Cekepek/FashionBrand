<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'name'=>'Pria',
        ]);
        DB::table('product_types')->insert([
            'name'=>'Wanita',
        ]);
        DB::table('product_types')->insert([
            'name'=>'Bayi',
        ]);
        DB::table('product_types')->insert([
            'name'=>'Anak-anak',
        ]);
        DB::table('product_types')->insert([
            'name'=>'Remaja',
        ]);
        DB::table('product_types')->insert([
            'name'=>'Peralatan Mandi',
        ]);
        DB::table('product_types')->insert([
            'name'=>'Kecantikan',
        ]);
        DB::table('product_types')->insert([
            'name'=>'Sepatu',
        ]);
    }
}
