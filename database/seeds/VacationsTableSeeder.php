<?php

use Faker\Generator as Faker;
use App\Vacation;
use Illuminate\Database\Seeder;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        /* Seeder */

        /* for ($i = 0; $i < 1; $i++) {
            $vacation = new Vacation();

            $vacation->country = 'Italia';
            $vacation->city = 'Milano';
            $vacation->residenceFacility = 'Hotel la puzzola';
            $vacation->description = 'Test';
            $vacation->price = 100;
            $vacation->lenghtOfStay = '5 giorni';
            $vacation->yearOfUse = '2022-10-01';

            $vacation->save();
        } */

        /* Faker */

        for ($i = 0; $i < 5; $i++) {
            $vacation = new Vacation();

            $vacation->country = $faker->country();
            $vacation->city = $faker->city();
            $vacation->residenceFacility = $faker->company();
            $vacation->description = $faker->realText();
            $vacation->price = $faker->randomNumber(3);;
            $vacation->lenghtOfStay = 'Five days';
            $vacation->yearOfUse = $faker->dateTime();

            $vacation->save();
        }
    }
}
