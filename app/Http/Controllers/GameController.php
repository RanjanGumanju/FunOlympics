<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //  $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        //  $this->middleware('permission:product-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::latest()->get();
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'required',

        ]);
        // dd($request->all());
        // $insert=$request->all();
        $insert = $request->except(['_token']);
        $insert['user_id'] = Auth::user()->id;

        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/uploads/'), $filename);
            $insert['image'] = $filename;
        }
        Game::create($insert);

        return redirect()->route('games.index')
            ->with('success', 'Game created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'required',

        ]);
        $data = $request->all();
        // $data['video_url']=YoutubeID($request->video_url);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/uploads/'), $filename);
            $data['image'] = $filename;
        }

        $game->update($data);

        return redirect()->route('games.index')
            ->with('info', 'Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
            ->with('error', 'Game deleted successfully');
    }

    public function postComment(Request $request)
    {
        $comment = new Comment();
        $comment->description = $request->comment;
        $comment->user_id = Auth::id();
        $comment->game_id = $request->game;
        $comment->save();

        if ($comment) {
            $data['user'] = $comment->user->name;
            $data['comment'] = $request->comment;
            $data['time'] = $comment->created_at->format('H:i:s');//$comment->created_at;


            // dd($data);

            return response()->json([
                'data' => $data,
                'bool' => true
            ]);
            // return response()->json(['data'=>$comment]);

        }

        // dd($request->all());
    }
}
