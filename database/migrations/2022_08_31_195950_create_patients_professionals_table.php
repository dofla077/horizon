<?php

use App\Models\Patient;
use App\Models\Professional;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_professionals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Professional::class)->constrained('professionals')->onDelete('cascade');
            $table->foreignIdFor(Patient::class)->constrained('patients')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients_professionals');
    }
};
