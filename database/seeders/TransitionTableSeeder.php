<?php

namespace Database\Seeders;

use App\Models\Transition;
use Domain\Transition\Service\TokenGenerator\TokenGeneratorInterface;
use Faker\Factory;
use Hashids\HashidsInterface;
use Illuminate\Database\Seeder;

class TransitionTableSeeder extends Seeder
{
    public function __construct(private HashidsInterface $hashids)
    {
    }

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
                'token'     =>  $this->hashids->encode($i + $faker->unixTime),
                'long_url'    => $faker->imageUrl,
                'clicks' => $faker->numberBetween(1, 100)
            ]);
        }
    }
}
