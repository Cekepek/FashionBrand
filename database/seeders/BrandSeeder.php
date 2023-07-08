<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'polo'
        ]);
        DB::table('brands')->insert([
            'name' => 'ysl'
        ]);
        DB::table('brands')->insert([
            'name' => 'uniqlo'
        ]);
        DB::table('brands')->insert([
            'name' => 'H&M'
        ]);
        DB::table('brands')->insert([
            'name' => 'palmolive'
        ]);
        DB::table('brands')->insert([
            'name' => 'skintific'
        ]);
        DB::table('brands')->insert([
            'name' => 'onitsuka tiger'
        ]);
    }
}
