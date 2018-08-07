<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Faker\Factory as Faker;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* User::create([
             //'name'    => 'John Smith',
             'email'    => 'john_smith@gmail.com',
             'password'   =>  Hash::make('password'),
             'remember_token' =>  str_random(10),
         ]);*/
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                //'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ]);
        }
    }
}
