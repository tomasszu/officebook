<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class messagesController extends Controller
{
    public function index()
    {
    	$messages=message::all();
        return view('user.messages.index', compact('messages'));
    }

    public function show(message $id)
    {
    	//$message=message::find($id);

	    //dd($announcement);

	    return view('user.messages.show', compact('id'));
    }
}
