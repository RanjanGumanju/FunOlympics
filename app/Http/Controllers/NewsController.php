<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index',compact('news'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            // 'video_url' => 'required',

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
        News::create($insert);
    
        return redirect()->route('news.index')
                        ->with('success','News created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function show(News $News)
    {
        return view('admin.news.show',compact('News'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',compact('news'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $News)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            // 'video_url' => 'required',

        ]);
    
        $News->update($request->all());
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('assets/img/'), $filename);
            $News['image'] = $filename;
        }
        return redirect()->route('news.index')
                        ->with('success','News updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $News)
    {
        $News->delete();
    
        return redirect()->route('news.index')
                        ->with('success','News deleted successfully');
    }
}
