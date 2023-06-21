<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() // index buat ambil semua game,
    {
        $games = Game::all();

        return view('home', compact('games'));
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
}
