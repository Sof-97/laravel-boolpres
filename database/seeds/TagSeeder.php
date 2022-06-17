<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags = [
            'FrontEnd',
            'BackEnd',
            'FullStack',
            'System Engineer',
            'UX Designer',
            'UI Designer', 
            'Head Of Development'
        ];

        foreach($tags as $tag){
            $newTag = new Tag();
            $newTag->label = $tag;
            $newTag->color = $faker->hexColor();
            $newTag->save();
        }
    }
}
