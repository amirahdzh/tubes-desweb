<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class TopUp extends Model
{
    use HasFactory;
    protected $fillable = ['game_id', 'nominal', 'price'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
