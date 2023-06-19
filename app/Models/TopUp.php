<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopUp extends Model
{
    protected $fillable = ['game_id', 'nominal', 'price'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
