<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HighlightController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $highlights = Highlight::latest()->get();
        return view('admin.highlights.index',compact('highlights'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.highlights.create');
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
        $insert['user_id']=Auth::user()->id;

           if($request->file('image')){
           
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('assets/uploads/'), $filename);
            $insert['image'] = $filename;
        }
        Highlight::create($insert);
    
        return redirect()->route('highlights.index')
                        ->with('success','Highlight created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Highlight  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Highlight $highlight)
    {
        return view('admin.highlights.show',compact('highlight'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Highlight  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Highlight $highlight)
    {
        return view('admin.highlights.edit',compact('highlight'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Highlight  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Highlight $game)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'required',

        ]);
        $data= $request->all();
        // $data['video_url']=YoutubeID($request->video_url);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('assets/uploads/'), $filename);
            $data['image'] = $filename;
        }
    
        $game->update($data);
        
        return redirect()->route('highlights.index')
                        ->with('success','Highlight updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Highlight  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highlight $game)
    {
        $game->delete();
    
        return redirect()->route('highlights.index')
                        ->with('success','Highlight deleted successfully');
    }
}
