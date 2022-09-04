<?php

namespace Database\Factories;

use App\Models\ProfessionalType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professional>
 */
class ProfessionalFactory extends Factory
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
            'social_reason' => $this->faker->company(),
            'professional_type_id' => ProfessionalType::factory(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->unique()->numerify('##########'),
        ];
    }
}
