<?php

use Illuminate\Database\Seeder;
use App\Model\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        // dd("$faker->sentence()" . "$faker->text()");
        for ($i = 0 ; $i < 10 ; $i++) { 
            $item = [
                'title' => $faker->sentence(),
                'content' => $faker->text(),
                'cate_id' => rand(1,10),
                'user_id' => rand(1,10)
            ];
            Post::create($item);
        }
        // dd(Post::create($item));
    }
}
