<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>'Celana',
        ]);
        DB::table('categories')->insert([
            'name'=>'Kemeja',
        ]);
        DB::table('categories')->insert([
            'name'=>'T-Shirt',
        ]);
        DB::table('categories')->insert([
            'name'=>'Sabun',
        ]);
        DB::table('categories')->insert([
            'name'=>'Pants',
        ]);
        DB::table('categories')->insert([
            'name'=>'Sepatu',
        ]);
        DB::table('categories')->insert([
            'name'=>'Perawatan Kulit',
        ]);
    }
}
