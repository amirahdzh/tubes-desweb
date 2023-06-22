<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('currency');
            $table->enum('form', ['ID', 'ID Server', 'Email'])->default('ID Server');
            $table->string('image_cur')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
}
