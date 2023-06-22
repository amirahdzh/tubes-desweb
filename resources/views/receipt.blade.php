@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Transaksi Berhasil</h1>
    {{-- bole taro icon ceklis gede kek coda akwakw --}}
    <p>Invoice Number: {{ $transactionData->invoice_no }}</p>
    <p>Payment Status: {{ $invoiceData->payment_status }}</p>
    <p>Transaction Time: {{ $transactionData->transaction_date }}</p>
    <button class="btn btn-primary" onclick="window.location.href='/'">Back To Home</button>
</div>
@endsection