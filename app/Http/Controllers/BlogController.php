<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Blog::latest()->get();
        return view('admin.blogs.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::where('model','blog')->get();
        return view('admin.blogs.create',compact('categories'));
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

        //    if($request->file('image')){
        //     $file= $request->file('image');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('assets/uploads/'), $filename);
        //     $insert['image'] = $filename;
        // }
        $blog = Blog::create($insert);
        $this->uploadImage($blog);
        return redirect()->route('blogs.index')
                        ->with('success','Blogs created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories =Category::where('model','blog')->get();
        return view('admin.blogs.edit',compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            // 'video_url' => 'required',

        ]);
    
        $blog->update($request->all());
        // if($request->file('image')){
        //     $file= $request->file('image');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('assets/img/'), $filename);
        //     $News['image'] = $filename;
        // }
        $this->uploadImage($blog);
        return redirect()->route('blogs.index')
                        ->with('success','Blogs updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')
                        ->with('success','Blogs deleted successfully');
    }




    public function category(Request $request)
    {
        $insert = $request->except(['_token']);
        $slug = Str::slug($request->name);
        $insert['slug'] = $slug; 
        Category::create($insert);
    }

        // Upload Image
    protected function uploadImage(Blog $blog){
        if (request()->has('image')) {
            $blog->update([
                'image' => request()->image->store('website/post', 'public'),
            ]);
            $image = Image::make(request()->file('image')->getRealPath());
            $image->save(public_path('storage/' . $blog->getRawOriginal('image')));
        }
    }
    
}
