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
            $table->string('ortho');
            $table->string('phon');
            $table->string('synt');
            $table->float('u');
            $table->string('psyll');
            $table->integer('nbsyll');
            $table->string('gseg');
            $table->string('pseg');
            $table->string('gpmatch');
            $table->tinyInteger('nblet');
            $table->tinyInteger('nbphon');
            $table->tinyInteger('nbgraoh');
            $table->tinyInteger('puortho');

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
