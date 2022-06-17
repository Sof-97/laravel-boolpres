<?php

use App\Models\Category;
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
                'label' => 'HTML', 'color' => 'success'
            ],
            [
                'label' => 'CSS', 'color' => 'warning'
            ],
            [
                'label' => 'JavaScript', 'color' => 'danger'
            ],
            [
                'label' => 'Php', 'color' => 'info'
            ]
        ];

        foreach($categories as $category){
            $new_category = new Category();
            $new_category->label = $category['label'];
            $new_category->color = $category['color'];
            $new_category->save();
        }
    }
}
