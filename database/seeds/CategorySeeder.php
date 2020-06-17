<?php

use Illuminate\Database\Seeder;
use App\Model\Category;
class CategorySeeder extends Seeder
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
        for ($i = 0 ; $i < 10 ; $i++) { 
            $item = [
                'cate_name' => $faker->creditCardType(),
                'user_id' => rand(1, 10)
            ];
            Category::create($item);
        }
        // dd(Category::create($item));
    }
}
