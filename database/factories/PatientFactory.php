<?php

namespace Database\Factories;

use App\Models\Professional;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->unique()->numerify('##########'),
            'birthdate' => $this->faker->dateTimeBetween('2008-01-01', '2021-12-31')->format('Y-m-d'),
        ];
    }
}
