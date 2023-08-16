<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Diner;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Diner::factory(33)->create()->each(function ($diner) {
            $numReviews = random_int(10, 60);

            Review::factory()->count($numReviews)
                ->good()
                ->for($diner)
                ->create();
        });

        Diner::factory(33)->create()->each(function ($diner) {
            $numReviews = random_int(10, 60);

            Review::factory()->count($numReviews)
                ->average()
                ->for($diner)
                ->create();
        });

        Diner::factory(34)->create()->each(function ($diner) {
            $numReviews = random_int(10, 60);

            Review::factory()->count($numReviews)
                ->bad()
                ->for($diner)
                ->create();
        });
    }
}
