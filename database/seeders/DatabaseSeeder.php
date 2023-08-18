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
        Diner::factory(100)->create()->each(function ($diner) {
            $numReviews = random_int(50, 100);

            Review::factory()->count($numReviews)
                ->good()
                ->for($diner)
                ->create();
        });

        Diner::factory(100)->create()->each(function ($diner) {
            $numReviews = random_int(40, 90);

            Review::factory()->count($numReviews)
                ->average()
                ->for($diner)
                ->create();
        });

        Diner::factory(100)->create()->each(function ($diner) {
            $numReviews = random_int(30, 80);

            Review::factory()->count($numReviews)
                ->bad()
                ->for($diner)
                ->create();
        });
    }
}
