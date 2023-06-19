<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['transaction_id', 'invoice_date', 'total_amount', 'payment_status'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
