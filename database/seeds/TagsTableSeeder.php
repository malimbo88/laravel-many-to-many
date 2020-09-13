<?php

use Illuminate\Database\Seeder;

// Use Car Model class
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
          "Sedan",
          "Coupe",
          "Hatchback",
          "SUV",
          "Crossover",
          "Van",
          "Minivan",
          "Pickup",
          "Station Wagon",
          "Cabriolet",
          "Roadster",
          "Limousine",
        ];

        foreach ($tags as $tag) {
          $new_tag = new Tag();

          // Car_body
          $new_tag->car_body = $tag;

          // Save data
          $new_tag->save();
        }
    }
}
