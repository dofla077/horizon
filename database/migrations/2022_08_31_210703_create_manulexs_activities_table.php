<?php

use App\Models\Activity;
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
        Schema::create('manulexs_activities', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('order')->nullable();
            $table->foreignIdFor(Manulex::class)->constrained('manulexs')->onDelete('cascade');
            $table->foreignIdFor(Activity::class)->constrained('activities')->onDelete('cascade');


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
        Schema::dropIfExists('manulexs_activities');
    }
};
