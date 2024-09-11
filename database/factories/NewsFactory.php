<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "firstname"=>fake()->firstname(),
            "lastname"=>fake()->lastname(),
            "email"=>fake()->unique()->safeEmail(),
            "phone"=>fake()->phoneNumber(),
            "news_title" => fake()->sentence(),
            "news_description" => fake()->sentence(),
            "news_location"=> fake()->sentence()
        ];
    }
}
