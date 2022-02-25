<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => '2220520',
            'name' => 'product1',
            'category_id' => 4,

        ]);
        DB::table('products')->insert([
            'id' => '2221006',
            'name' => 'product2',
            'category_id' => 9,

        ]);
        DB::table('products')->insert([
            'id' => '2188353',
            'name' => 'product3',
            'category_id' => 14,

        ]);
      

    }
}