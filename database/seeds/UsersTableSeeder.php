<?php

use Illuminate\Database\Seeder;

// Use Faker class
use Faker\Generator as Faker;

// Use User class Model
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
          $new_user = new User();
          // Name
          $new_user->name = $faker->name;

          // Email
          $new_user->email = $faker->email;

          // Password
          $new_user->password = Hash::make($faker->password);

          // Save Data
          $new_user->save();
        }
    }
}
