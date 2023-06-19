<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['topup_id', 'code'];

    public function topup()
    {
        return $this->belongsTo(TopUp::class);
    }
}
