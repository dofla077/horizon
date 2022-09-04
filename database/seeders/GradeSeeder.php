<?php

namespace Database\Seeders;

use App\Enums\GradeLevel;
use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (GradeLevel::cases() as $gradeLevel) {
            Grade::factory()->create([
                'label' => $gradeLevel->value,
                'slug' => str($gradeLevel->value)->slug(),
            ]);
        }
    }
}
