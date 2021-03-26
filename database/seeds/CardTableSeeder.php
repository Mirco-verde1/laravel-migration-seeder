<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Card;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20 ; $i++){

            $card = New Card;
            $card->name = $faker->name();
            $card->model = $faker->name();
            $card->price = rand(15,200);
            $card->year = $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now');
            $card->new = true;

            $card->save();




        }

    }
}
