<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function show(Request $request)
    {
        // Generate invoice number
        $invoiceNo = 'INV-' . Str::random(8);

        // Retrieve other form data
        $nominal = $request->input('selectedNominal');
        $price = $request->input('selectedPrice');
        $paymentMethod = $request->input('selectedPayment');
        // $topUpId = $request->input('topup_id');

        // Get current timestamp
        $invoiceDate = Carbon::now();

        // Save invoice data to database
        DB::table('invoices')->insert([
            'invoice_no' => $invoiceNo,
            'invoice_date' => $invoiceDate,
        ]);

        return view('invoice', compact('invoiceNo', 'nominal', 'price', 'paymentMethod', 'invoiceDate'));
    }
}
