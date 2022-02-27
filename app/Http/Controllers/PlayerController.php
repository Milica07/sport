<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('players.show', compact('player'));
    }
}
