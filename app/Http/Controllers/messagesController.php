<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;
use App\User;

class messagesController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except([]);
    }
    
    public function index()
    {
        $users=User::all();
    	$messages=message::where('user_for',auth()->id())->latest()->get();
        return view('user.messages.index', compact('messages'), compact('users'));
    }

    public function store()
    {
        //dd(request()->all());

        $message = new message;
        $message->user_id = auth()->id();
        $message->message = request('text');
        $message->user_for = request('reciever');
        $message->save();
        return redirect('/messages');
    }

    public function show(message $id)
    {
    	
	    return view('user.messages.show', compact('id'));
    }

    public function destroy(message $id)
    {

        $id->delete();
        return redirect('/messages');
    }
}
