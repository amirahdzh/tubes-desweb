<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['topup_id', 'payment_amount', 'payment_method_id', 'transaction_time', 'voucher_id', 'voucher_code'];

    public function topup()
    {
        return $this->belongsTo(TopUp::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }
}
