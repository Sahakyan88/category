<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category_name' => 'Heren',
                    'children' => [
                        [    
                            'category_name' => 'Shirts',
                            'children' => [
                                    ['category_name' => 'Kleding'],
                                    ['category_name' => 'Poloshirts'],
                                    
                            ],
                        ],
                        [    
                            'category_name' => 'Sport',
                                'children' => [
                                    ['category_name' => 'Sporten'],
                                    ['category_name' => 'Outdoor'],
                                    ['category_name' => 'Functionele jacks'],
                                    ['category_name' => 'Thermo- & donsjassen'],
                            ],
                        ],
                    ],
                ],
                [
                    'category_name' => 'Dames',
                        'children' => [
                        [
                            'category_name' => 'Kleding',
                            'children' => [
                                ['category_name' => 'Shirts'],
                                ['category_name' => 'T-shirts'],
                                ['category_name' => 'Basic T-shirts'],
                            ],
                        ],
                       
                    ],
                ],
        ];
        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}