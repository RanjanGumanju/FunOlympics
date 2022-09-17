<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Highlight;
use App\Models\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        //test
        $news = News::take(2)->get();
        $games = Game::take(3)->latest()->get();

        return view('front.welcome', compact('news', 'games'));
    }

    public function liveMatching()
    {
        $games = Game::latest()->get();

        return view('front.live-match', compact('games'));
    }

    public function liveMatchDetail($id)
    {
        $game = Game::findOrFail($id);
        return view('front.live-match-detail', compact('game'));
        
    }

    public function newsList()
    {
        $news = News::latest()->get();
        return view('front.news', compact('news'));
    }

    public function newsDetail($id)
    {
        $new = News::findOrFail($id);
        return view('front.news-detail', compact('new'));
    }

    public function highlights()
    {
        $highlights = Highlight::latest()->get();
        return view('front.highlights', compact('highlights'));
    }

    public function highlightsDetail($id)
    {
        $highlight = Highlight::findOrFail($id);
        return view('front.highlights-detail', compact('highlight'));
    }

}
