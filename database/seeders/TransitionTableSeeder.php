<?php

namespace Database\Seeders;

use App\Models\Transition;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TransitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transition::truncate();
        $faker = Factory::create();
        for ($i = 0; $i < $faker->numberBetween(10, 40); $i++) {
            Transition::create([
                'token'     => $faker->url,
                'long_url'    => $faker->url(),
                'clicks' => $faker->numberBetween(1, 100)
            ]);
        }
    }
}
