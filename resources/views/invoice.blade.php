@extends('layouts.main')

@section('container')


<div class="container">
    <h1>Invoice</h1>
    <p>Invoice Number: {{ $invoiceNo }}</p>
    <p>Price: Rp. {{ number_format($price, 0, ',', '.') }}</p>
    <p>Payment Method: {{ $paymentMethod }}</p>
    <button class="btn btn-primary">Saya Sudah Bayar</button>
</div>


@endsection