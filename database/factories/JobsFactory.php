<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\jobs;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jobs>
 */
class JobsFactory extends Factory
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
            "firstname"=>jobs::faker()->firstname(),
            "lastname"=>jobs::faker()->lastname(),
            "email"=>jobs::faker()->email()->unique(),
            "phone"=>jobs::faker()->phoneNumber(),
            "job_title" => jobs::faker()->sentence(),
            "job_description" => jobs::faker()->sentence(),
            "job_location"=> job::faker()->sentence()
        ];
    }
}
