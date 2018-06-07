<?php

namespace App\Http\Controllers;

use DB;

use \Destroy;

use Illuminate\Http\Request;



class pagesController extends Controller{

	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['users']]);
    }
	
/* 	public function about(){

		$maker = ['volvo', 'bmw'];
		return view('about', compact('maker'));
	} */


	public function view($id)
	{   
		$users = DB::table('users')->find($id);
		return view('mcs.view')->with('dangote', $users);
	}
	
	
	public function users()
	{
		$users = DB::table('users')->get();
		return view('mcs.users')->with('users_dangote', $users);
	}

	public function destroy($id)
	{
		DB::table('users')->delete($id);
		return back();
	}

	public function modify($id)
	{  
		$user = DB::table('users')->find($id);
		return view('mcs.modify')->with('post', $user);
	}

	public function update(Request $request, $id)
	{  
		$name = $request->name;
		$email = $request->email;
		DB::table('users')->where('id', $id)->update(['name' => $name, 'email' => $email ]);

		return redirect('mcs/users');
	}
	
}