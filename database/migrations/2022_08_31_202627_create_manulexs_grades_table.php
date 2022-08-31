<?php

use App\Models\Grade;
use App\Models\Manulex;
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
        Schema::create('manulexs_grades', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Manulex::class)->constrained('manulexs')->onDelete('cascade');
            $table->foreignIdFor(Grade::class)->constrained('grades')->onDelete('cascade');

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
        Schema::dropIfExists('manulexs_grades');
    }
};
