<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['invoice_id'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
