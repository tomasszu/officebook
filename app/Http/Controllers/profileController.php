<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\management_post;
use App\forum;
use App\User;

class profileController extends Controller
{
    public function __construct()
	{
       $this->middleware('auth')->except([]);
	}

    public function index()
    {   $forums=forum::all();
    	$users=User::all();
        $announcements=management_post::all();
        $posts=post::where('user_id', auth()->id() )->latest()->get();
        return view('user.profile', compact('posts','forums','announcements','users'));
    }
}
