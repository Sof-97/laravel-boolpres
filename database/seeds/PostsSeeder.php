<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //take ids from category in array key -> value  // toArray remove key from array [1,2,3,4]
        $category_ids = Category::pluck('id')->toArray();
        $tag_ids = Tag::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->category_id = Arr::random($category_ids);
            $post->title = $faker->sentence();
            $post->content = $faker->sentences(5, true);
            $post->image = $faker->imageUrl(250, 250);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
            $post->tags()->sync(Arr::random($tag_ids));
        }
    }
}
