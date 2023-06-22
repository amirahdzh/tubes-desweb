@extends('layouts.main')

@section('container')

<div class="container">
    <h1>Invoice</h1>
    <p>Invoice Number: {{ $invoiceNo }}</p>
    <p>Invoice Date: {{ $invoiceDate }}</p>
    <p>Price: Rp. {{ number_format($price, 0, ',', '.') }}</p>
    <p>Payment Method: {{ $paymentMethod }}</p>
    <form action="{{ route('mark-as-paid', ['invoiceNo' => $invoiceNo]) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Saya Sudah Bayar</button>
    </form>
</div>


@endsection