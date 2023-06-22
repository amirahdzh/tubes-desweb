<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() // index buat ambil semua game,
    {
        $title = 'Home';
        $games = Game::all();

        return view('home', compact('games'))->with('title', $title);
    }

    public function showByType($type)
    {
        $title = ''; // Ini buat naro breadcrumb
        if ($type === "voucher") {
            $title = "Voucher";
        } else if ($type === "top-up") {
            $title = "Top Up";
        }

        $games = Game::whereHas('type', function ($query) use ($type) {
            $query->where('name', $type);
        })->get();

        return view('type', compact('games'))->with('title', $title);
    }

    public function show($slug)
    {
        $game = Game::where('slug', $slug)->firstOrFail();
        $topUps = $game->topUps;

        return view('detailGame', compact('game', 'topUps'));
    }

    public function paymentMethod(Request $request, $slug, $topup_id, $payment_method_id)
    {
        $paymentMethod = PaymentMethod::findOrFail($payment_method_id);
        $selectedNominal = $request->input('selectedNominal');
        $selectedPrice = $request->input('selectedPrice');

        $paymentMethods = PaymentMethod::all(); // Ambil semua metode pembayaran

        return view('paymentMethod', compact('selectedNominal', 'selectedPrice', 'paymentMethods'));
    }
}
