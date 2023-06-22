<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->unique();
            $table->timestamp('invoice_date')->useCurrent();
            $table->foreignId('payment_method_id')->nullable();
            $table->foreignId('topup_id')->nullable();
            $table->enum('payment_status', ['Belum Dibayar', 'Sudah Dibayar'])->default('Belum Dibayar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
