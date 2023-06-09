<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'type_id',
        'slug',
        'name',
        'description',
        'image',
        'currency',
        'form',
        'image_cur'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function topUps()
    {
        return $this->hasMany(TopUp::class);
    }
}
