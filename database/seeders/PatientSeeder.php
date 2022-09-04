<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Professional;
use App\Models\ProfessionalType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::factory(30)
           ->has(
               Professional::factory()
           )->create();
    }
}
