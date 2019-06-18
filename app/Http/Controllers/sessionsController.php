<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionsController extends Controller
{

	//public function __controller()
    //{
    //  $this->middleware('guest');
    //}

    public function create()
    {
      return view('sessions.create');
    }

    public function store()
    {
      if(! auth()->attempt(request(['email','password'])))
      {
      	return back()->withErrors([
         'message' => 'Invalid passoword or Email'
      	]);
      }

      return redirect('/');

    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/');
    }
}
