<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $new_travel = new Travel();
            $new_travel->state = $faker->state();
            $new_travel->city = $faker->city();
            $new_travel->description = $faker->text(100);
            $new_travel->price = $faker->randomFloat(2, 1000, 10000);
            $new_travel->save();
        }
    }
}
