<?php

use Illuminate\Database\Seeder;
use App\Model\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0 ; $i < 10 ; $i++) { 
            $item = [
                'name' => $faker->name,
                'birthday' => $faker->date(),
                'phone' => $faker->e164PhoneNumber(),
                'email' => $faker->email(),       
                'password' => '$2y$10$YPd3VCv2DRcZLyS55SWcKugHDBznJSt9DIJK41VsiFSbS3LeZOph6',
                'role' => 1,
                'is_active' => 1
            ];
            User::create($item);
            // dd(User::create($item));
        }
    }
}
