<?php

use Illuminate\Database\Seeder;
use Models\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 50 product records
        for ($i = 0; $i < 5; $i++) {
            Post::create([
                'post' => $faker->title
            ]);
        }
    }
}
