@extends('layouts.main')

@section('container')
<div class="container border border-secondary rounded-3 w-50 mb-5">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="d-flex flex-column align-items-center py-5">
                <div class="logo">
                    <img src="{{ asset('img/Logo.png') }}" alt="GameHub" class="img-logo">
                </div>
                <h1>Transaksi Berhasil!</h1>
                <div class="col-auto">
                    <div class="container border border-secondary rounded-3 w-100 text-center py-3 my-3 px-3">
                        <div text-center>
                            <strong>Kode Voucher:</strong>
                            <h2>XXXX-XXXX-XXXX</h2>
                        </div>
                    </div>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Invoice Number</th>
                                <td>:</td>
                                <td>{{ $transactionData->invoice_no }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Payment Status</th>
                                <td>:</td>
                                <td>{{ $invoiceData->payment_status }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Transaction Time</th>
                                <td>:</td>
                                <td>{{ $transactionData->transaction_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary" onclick="window.location.href='/'">Back To Home</button>
            </div>
        </div>
    </div>
</div>

@endsection