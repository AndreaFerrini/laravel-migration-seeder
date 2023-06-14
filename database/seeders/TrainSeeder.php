<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 100; $i++){
            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->randomElement(["firenze", "grosseto", "siena", "arezzo", "livorno", "pisa", "massa", "carrara", "pistoia", "lucca", "poggibonsi", "monteriggioni", "chiusi", "montalcino", "sangimignano"]);
            $train->arrival_station = $faker->randomElement(["firenze", "grosseto", "siena", "arezzo", "livorno", "pisa", "massa", "carrara", "pistoia", "lucca", "poggibonsi", "monteriggioni", "chiusi", "montalcino", "sangimignano"]);
            $train->departure_time = $faker->dateTimeBetween("-1 day", "+1 day");
            $train->arrival_time = $faker->dateTimeBetween("+1 day", "+2 day");
            $train->train_code = "AB".$faker->randomDigit();
            $train->wagons_number = $faker->randomDigit();
            $train->on_time = $faker->Boolean(70);
            $train->cancelled = $faker->Boolean(20);

            $train->save();
        }
    }
}
