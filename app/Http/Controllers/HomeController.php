<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user=Auth::user();
        if($user->hasRole('user')){
            return redirect()->route('front.live.match')->with('success','User login succesfully');

        }
        $data['users']=User::role('user')->count();
        $data['games']=Game::count();
        $data['news']=News::count();
        $data['blogs']=Blog::count();


        // dd($user->getRoleClass()->toArray());
        // dd($data);
        return view('dashboard',$data);
    }
}
