<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopUpsTable extends Migration
{
    public function up()
    {
        Schema::create('top_ups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games');
            $table->integer('nominal');
            $table->integer('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('top_ups');
    }
}
