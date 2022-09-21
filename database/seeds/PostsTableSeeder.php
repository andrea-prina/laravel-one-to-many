<?php

use App\models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            
            $newPost = new Post();
            $newPost->author = $faker->name();
            $newPost->title = $faker->catchPhrase();
            $newPost->post_content = $faker->paragraphs(2, true);
            $newPost->post_image = $faker->imageUrl(360, 360, 'animals', true, 'cats');
            $newPost->post_date = $faker->dateTime();
    
            $newPost->save();
        }
    }
}