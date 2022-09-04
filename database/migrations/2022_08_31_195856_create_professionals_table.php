<?php

use App\Models\ProfessionalType;
use App\Models\User;
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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('social_reason')->nullable();
            $table->string('address');
            $table->bigInteger('phone');

            $table->foreignIdFor(User::class)->constrained('users')->onDelete('cascade');
            $table->foreignIdFor(ProfessionalType::class)->constrained('professional_types')->onDelete('cascade');

            $table->unique(['user_id']);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals');
    }
};
