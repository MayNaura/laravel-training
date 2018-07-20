<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'welcome']);
    }

    public function welcome()
    {
        return view('welcome');
    }

    // Authenticate user and show their posts on the home page
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);

        return view('home')->with('posted', $user->post()->orderBy('created_at', 'desc')->paginate(3));
    }
}
