<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $news = News::take(2)->get();
        $games = Game::take(3)->latest()->get();

        return view('front.welcome', compact('news', 'games'));
    }

    public function liveMatching()
    {
        $games = Game::latest()->get();

        return view('front.live-match', compact('games'));
    }

    public function newsList()
    {
        $news = News::latest()->get();
        // dd('asd');
        return view('front.news', compact('news'));
    }
}
