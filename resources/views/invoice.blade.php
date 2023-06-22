@extends('layouts.main')

@section('container')

<div class="container border border-secondary rounded-3 w-50 mb-5">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="d-flex flex-column align-items-center py-5">
                <div class="logo">
                    <img src="{{ asset('img/Logo.png') }}" alt="GameHub" class="img-logo">
                </div>
                <h1>Invoice</h1>
                <div class="col-auto">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Invoice Number</th>
                                <td>:</td>
                                <td>{{ $invoiceNo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Invoice Date</th>
                                <td>:</td>
                                <td>{{ $invoiceDate }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td>:</td>
                                <td>Rp. {{ number_format($price, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Payment Method</th>
                                <td>:</td>
                                <td>{{ $paymentMethod }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form action="{{ route('mark-as-paid', ['invoiceNo' => $invoiceNo]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Saya Sudah Bayar</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection