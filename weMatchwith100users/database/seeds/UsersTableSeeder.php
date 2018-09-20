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
                'q1' => $faker->randomDigit,
                'q2' => $faker->randomDigit,
                'q3' => $faker->randomDigit,
                'q4' => $faker->randomDigit,
                'q5' => $faker->randomDigit,
                'q6' => $faker->randomDigit,
                'q7' => $faker->randomDigit,
                'q8' => $faker->randomDigit,
                'q9' => $faker->randomDigit,
                'q10' => $faker->randomDigit,
                'q11' => $faker->randomDigit,
                'q12' => $faker->randomDigit,
                'importance1' => $faker->randomDigit,
                'importance2' => $faker->randomDigit,
                'importance3' => $faker->randomDigit,
                'importance4' => $faker->randomDigit,
                'importance5' => $faker->randomDigit,
                'importance7' => $faker->randomDigit,
                'importance9' => $faker->randomDigit,
                'importance10' => $faker->randomDigit,
                'importance11' => $faker->randomDigit,
                'importance12' => $faker->randomDigit,
                'remember_token' => str_random(10),
            ]);
        }
    }
}
