<?php

class UsersTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create();
        foreach(range(1,10) as $index){
            User::create([
              'name' => $faker->name,
              //'slug' => $faker->slug,
              'password'=> Hash::make('password'),
              'email' => $faker->email,
              'gender' => $faker->gender
            ]);
        }
    }
}