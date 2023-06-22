<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
