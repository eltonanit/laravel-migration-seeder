<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<25; $i++) {
            $train = new Train();
            
            $train->company = $faker->company();
            $train->departure_station = $faker->randomElement(['Milano','Roma', 'Torino']);
            $train->arrival_station = $faker->randomElement(['Parigi','Vienna', 'Lecce']);
            $train->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->arrival_time = $faker->dateTimeBetween('+1 day', '+2 day');
             $train->train_wagons = 'AB'.$faker->randomDigitNotNull();
            $train->train_code = 'AB'.$faker->randomNumber(4, false);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            //salvo la istanza train
            $train->save();
        }
        
    }
}
