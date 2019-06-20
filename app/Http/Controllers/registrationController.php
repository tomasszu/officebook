<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registrationController extends Controller
{
    public function create()
    {
      return view('registration.create');	
    }

    public function store()
    {
      	
      $this->validate(request(), [
       'name' => 'required',
       'email' => 'required|email',
       'password' => 'required|confirmed'


      ]);

      $user = new User;
    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = bcrypt(request('password'));
    	$user->save();

    	auth()->login($user);

        return redirect('/');
    }

    public function update()
    {
      //dd(request('body'));
      ;
        User::where('id', request('user') )->update(['Permission'=> request('privilige')]);
      return redirect('/profile');
    }
}
