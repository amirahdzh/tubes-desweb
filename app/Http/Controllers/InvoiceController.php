<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Game;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function show(Request $request)
    {
        $gameForm = $request->input('gameForm');
        session()->put('gameForm', $gameForm);

        // Retrieve game data
        $game = Game::find($request->input('game_id'));

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

        $title = 'Invoice';
        return view('invoice', compact('invoiceNo', 'nominal', 'price', 'paymentMethod', 'invoiceDate', 'gameForm'))->with('title', $title);
    }

    public function markAsPaid(Request $request, $invoiceNo)
    {
        // Update payment status to "Sudah Dibayar"
        DB::table('invoices')
            ->where('invoice_no', $invoiceNo)
            ->update(['payment_status' => 'Sudah Dibayar']);

        $gameForm = session()->get('gameForm');

        // Retrieve updated invoice data
        $invoiceData = DB::table('invoices')
            ->where('invoice_no', $invoiceNo)
            ->first();

        // Get current timestamp
        $transactionDate = Carbon::now();

        // Insert data into transactions table
        $transactionId = DB::table('transactions')->insertGetId([
            'invoice_no' => $invoiceNo,
            'transaction_date' => $transactionDate,
        ]);

        // Retrieve the newly inserted transaction data
        $transactionData = DB::table('transactions')
            ->where('id', $transactionId)
            ->first();

        $title = 'Receipt';
        $voucher = Str::random(9);
        $voucherFormat = implode('-', str_split($voucher, 3));

        return view('receipt', compact('transactionData', 'invoiceData', 'gameForm', 'voucherFormat'))->with('title', $title);
    }
}
