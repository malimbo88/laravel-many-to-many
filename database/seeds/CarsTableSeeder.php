<?php

use Illuminate\Database\Seeder;

// Use Faker class
use Faker\Generator as Faker;

// Use Car Model class
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_car = new Car();

          // User_id
          $new_car->user_id = rand(1, 5);

          // Manufacturer
          $new_car->manufacturer = $faker->randomElement([
            "Ford",
            "Bmw",
            "Fiat",
            "Audi",
            "Alfa Romeo",
            "Lancia",
            "Chevrolet",
            "Audi",
            "Mercedes",
            "Lamborghini",
            "Ferrari",
            "Mini",
            "Crysler",
            "Maserati",
            "Tesla",
            "Porche",
          ]);

          // Model
          $new_car->model = $faker->randomElement([
            "Y",
            "Tipo",
            "Panda",
            "Countryman",
            "X5",
            "Portofino",
            "Diablo",
            "Levante",
            "Voyager",
            "Corvette",
            "Panamera",
            "Cayenne",
            "X",
            "Gran Torino",
            "TT",
            "A3",
            "Slc",
            "G Class",
            "Giulietta",
            "Stelvio",
          ]);

          // Engine
          $new_car->engine = $faker->randomElement([
            "1200 Methane",
            "1600 Gasoline",
            "4000 V8",
            "6500 V12",
            "1400 Lpg",
            "1600 Turbo diesel",
            "1000 Gasoline",
            "1600 Methane",
            "2000 Gasoline",
            "Hybrid Electric-Gasoline",
            "6300 V12",
            "Electric"
          ]);

          // Plate
          $new_car->plate = $faker->ean8;

          // Year
          $new_car->year = $faker->year;

          // Price
          $new_car->price = $faker->randomFloat(2, 9000, 1000000);

          // Save data
          $new_car->save();

          // Attach
          $new_car->tags()->attach(rand(1, 12));
        }
    }
}
