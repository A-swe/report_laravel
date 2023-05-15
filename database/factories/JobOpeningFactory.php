<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobOpening>
 */
class JobOpeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'hospital' => $this->faker->sentence(),
            'engineer' => $this->faker->sentence(),
            'error_name' => $this->faker->sentence(),
            'error_status' => $this->faker->sentence(),
            'location' => $this->faker->sentence(),
        ];
    }
}
