<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use \Hash;

class formController extends Controller{

	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
	
	public function create()
	{
		return view('create');
    }
    
	public function store(Request $request)
	{

		$this->validate($request, Post::$rules);

		$post = new Post;
		$post->title = $request->title;
		$post->body = $request->body;
		$post->user_id = auth()->user()->id;
		$post->save();

		return redirect('home')->with('success', 'Post Created');
	}

	public function edit($id)
	{
		$editPost = Post::find($id);
			if (auth()->user()->id != $editPost->user_id){
				return redirect('home')->with('error', 'Unauthorized Page');
			}

		return view('edit')->with('post', $editPost);
	}

	public function update(Request $request, $id)
	{  
		
		$postUp = Post::find($id);
		$postUp->title = $request->title;
		$postUp->body = $request->body;
		$postUp->save();

		return redirect('home')->with('success', 'Post Updated');
	}
}
