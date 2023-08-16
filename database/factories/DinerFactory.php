<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diner>
 */
class DinerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $appendTitles = ['餐廳', '小吃', '飯店', '料理', '速食', '麵店', '咖啡廳', '港式飲茶', '麵店'];

        return [
            'title' => fake('zh_TW')->firstName . $appendTitles[array_rand($appendTitles)],
            'address' => fake('zh_TW')->address,
            'created_at' => fake()->dateTimeBetween('-2 years'),
            'updated_at' => fake()->dateTimeBetween('created_at', 'now'),
        ];
    }
}
