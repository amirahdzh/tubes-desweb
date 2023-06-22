@extends('layouts.detail')

@section('topup')
@foreach ($topUps as $topUp)
<div class="col-md-4 d-flex align-items-stretch">
    <div class="card px-4 py-3 mb-3 w-100 d-flex flex-column" onclick="selectTopUp({{ $topUp->nominal }}, {{ $topUp->price }}, this)">

        <!-- Card content -->
        <img src="{{ asset('img/'.$game->image_cur) }}" class="card-img-top currency-icon my-3" alt="{{ $game->name . 'currency' }}" <h4 class="card-title">{{ $topUp->nominal }} {{ $game->currency }}</h4>
        <p class="card-price">Rp. {{ number_format($topUp->price, 0, ',', '.') }}</p>
    </div>
</div>
@endforeach
@endsection

@section('desc')
<div class="col desc-text">
    <h3 class="container-title">Deskripsi Game</h3>
    <p class="game-description">{!! $game->description !!}</p>
</div>
@endsection

@section('paymentmethod')
@foreach ($paymentMethods as $pm)
<div class="col-md-6">
    <div class="card px-4 py-4 mb-3" onclick="selectPaymentMethod('{{ $pm->name }}', this)">
        <!-- Card content -->
        <img src="{{ asset('img/'.$pm->image) }}" class="card-img-top pm-icon my-3" alt="{{ $pm->name }}" <h6 class="card-title">{{ $pm->name }}</h6>
    </div>
</div>
@endforeach
@endsection

@section('form')
<div class="col">
    <!-- Form content -->
    <form action="{{ route('invoice', ['slug' => $game->slug, 'token' => Str::random(8)]) }}" method="POST" onsubmit="return validateForm()">
        @csrf
        @if ($game->form === "ID Server")
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="mb-3">
            <label for="server" class="form-label">Server</label>
            <input type="text" class="form-control" id="server" name="server">
        </div>
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <input type="hidden" id="selectedPayment" name="selectedPayment">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
            <p>Metode Pembayaran: <span id="summaryPaymentMethod"></span></p>
        </div>
        @elseif ($game->form === "ID")
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <input type="hidden" id="selectedPayment" name="selectedPayment">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
            <p>Metode Pembayaran: <span id="summaryPaymentMethod"></span></p>
        </div>
        @elseif ($game->form === "Email")
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <input type="hidden" name="topup_id" value="{{ $topUp->id }}">
        <input type="hidden" id="selectedNominal" name="selectedNominal">
        <input type="hidden" id="selectedPrice" name="selectedPrice">
        <input type="hidden" id="selectedPayment" name="selectedPayment">
        <div>
            <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
            <p>Rp. <span id="summaryPrice">0</span></p>
            <p>Metode Pembayaran: <span id="summaryPaymentMethod"></span></p>
        </div>
        @endif
        <div class="d-flex justify-content-center">
            <button class="buy-button btn btn-outline-success rounded-pill" onclick="showInvoice('{{ $topUp->nominal }}', '{{ $topUp->price }}', '{{ $pm->name }}')">Beli Sekarang</button>
        </div>
    </form>
</div>
@endsection