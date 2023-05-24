<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category_name' => 'Scarpe',
            ],
            [
                'category_name' => 'Accessori',
            ],
            [
                'category_name' => 'Occhiali',
            ],
            [
                'category_name' => 'Giubbotti',
            ],
            [
                'category_name' => 'Felpe',
            ],
            [
                'category_name' => 'Maglioni',
            ],
            [
                'category_name' => 'Pantaloni',
            ],
            [
                'category_name' => 'T-shirt',
            ],
            [
                'category_name' => 'Camicie',
            ],
            [
                'category_name' => 'Vestiti',
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
