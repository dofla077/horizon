<?php

namespace Database\Factories;

use App\Enums\GradeLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $level = collect(GradeLevel::cases())->random();

        return [
            'label' => $level->value,
            'slug' => str($level->value)->slug(),
        ];
    }
}
