<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['invoice_no', 'topup_id', 'invoice_date', 'payment_method_id', 'payment_status'];

    public function topUp()
    {
        return $this->belongsTo(TopUp::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(TopUp::class);
    }
}
