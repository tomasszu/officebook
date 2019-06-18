<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class messagesController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except([]);
    }
    
    public function index()
    {
        //$messages=message::all()
    	$messages=message::where('user_for',auth()->id())->latest()->get();
        return view('user.messages.index', compact('messages'));
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
