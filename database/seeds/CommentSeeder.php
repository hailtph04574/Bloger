<?php

use Illuminate\Database\Seeder;
use App\Model\Comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // dd($faker->creditCardType());
        for ($i = 0 ; $i < 5 ; $i++) {
            $item = [
                'post_id' => rand(1,5),
                'content' => $faker->sentence(),
                'user_id' => rand(1,10),
                'is_active' => 1
            ];
            Comment::create($item);
            // dd(Comment::create($item));
        }
    }
}
