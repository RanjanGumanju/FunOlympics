<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        # code...
        $games =Game::all();
        return view('user.game.index',compact('games'));
    }

    public function show($id)
    {
        # code...
        $game =Game::findOrFail($id);
        // dd($game);


        return view('user.game.show',compact('game'));

    }
}
