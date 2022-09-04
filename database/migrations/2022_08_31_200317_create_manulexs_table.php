<?php

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
        Schema::create('manulexs', function (Blueprint $table) {
            $table->id();
            $table->string('ortho')->nullable();
            $table->string('phon')->nullable();
            $table->string('synt')->nullable();
            $table->float('u')->nullable();
            $table->string('psyll')->nullable();
            $table->integer('nbsyll')->nullable();
            $table->string('gseg')->nullable();
            $table->string('pseg')->nullable();
            $table->string('gpmatch')->nullable();
            $table->tinyInteger('nblet')->nullable();
            $table->tinyInteger('nbphon')->nullable();
            $table->tinyInteger('nbgraph')->nullable();
            $table->tinyInteger('puortho')->nullable();

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
        Schema::dropIfExists('manulexs');
    }
};
