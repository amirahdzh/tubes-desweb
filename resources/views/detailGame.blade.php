@extends('layouts.detail')

@section('topup')
@foreach ($topUps as $topUp)
<div class="col-md-4">
    <div class="card" onclick="selectTopUp({{ $topUp->nominal }}, {{ $topUp->price }})">
        <!-- Card content -->
        <h4 class="card-title">{{ $topUp->nominal }} {{ $game->currency }}</h4>
        <p class="card-price">Rp. {{ number_format($topUp->price, 0, ',', '.') }}</p>
        <button class="buy-button">Beli</button>
    </div>
</div>
@endforeach
@endsection

@section('desc')
<div class="col">
    <h3 class="container-title">Deskripsi Game</h3>
    <p class="game-description">{!! $game->description !!}</p>
</div>
@endsection

@section('paymentmethod')
@foreach ($paymentMethods as $pm)
<div class="col-md-6">
    <div class="card" onclick="selectPaymentMethod('{{ $pm->name }}')">
        <!-- Card content -->
        <h6 class="card-title">{{ $pm->name }}</h6>
        <button class="buy-button">Beli</button>
    </div>
</div>
@endforeach
@endsection

@section('form')
<div class="col">
    <!-- Form content -->
    <form action="#" method="GET">
        {{-- <form action="{{ route('payment-method', ['slug' => $game->slug, 'topup_id' => $topUp->id]) }}"
            method="GET"> --}}
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
            <div>
                <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
                <p>Rp. <span id="summaryPrice">0</span></p>
            </div>
            @elseif ($game->form === "ID")
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <input type="hidden" id="selectedNominal" name="selectedNominal">
            <input type="hidden" id="selectedPrice" name="selectedPrice">
            <div>
                <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
                <p>Rp. <span id="summaryPrice">0</span></p>
            </div>
            @elseif ($game->form === "Email")
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <input type="hidden" id="selectedNominal" name="selectedNominal">
            <input type="hidden" id="selectedPrice" name="selectedPrice">
            <div>
                <p><span id="summaryNominal">0 {{ $game->currency }}</span></p>
                <p>Rp. <span id="summaryPrice">0</span></p>
                <p>Metode Pembayaran: <span id="summaryPaymentMethod"></span></p>
            </div>
            @endif

            <button class="buy-button" onclick="showInvoice('{{ $topUp->nominal }}', '{{ $topUp->price }}', '{{ $pm->name }}')">Beli Sekarang</button>

        </form>
</div>
@endsection