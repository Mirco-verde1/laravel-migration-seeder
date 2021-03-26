<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Card;


class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20 ; $i++){

            $cards = New Card;
            $cards->name = $faker->name();
            $cards->model = $faker->name();
            $cards->price = rand(15,200);
            $cards->year = $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now');
            $cards->new = true;

            $cards->save();




        }

    }
}
