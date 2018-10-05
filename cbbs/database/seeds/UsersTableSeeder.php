<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'gender' => $faker->randomElement(['male', 'female']),
                'slug' => $faker->slug,
                'avatar' => $faker->image(),
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ]);
        }
    }
}
