<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\management_post;

class announcementsController extends Controller
{
	public function __construct()
	{
       $this->middleware('auth')->except([]);
	}
	
    public function index()
    {
    	$announcements=management_post::latest()->get();

	    return view('announcements.announcements', compact('announcements'));
    }

    public function store()
    {
    	//dd(request()->all());

    	$announcement = new management_post;
    	$announcement->title = request('title');
        $announcement->body = request('body');
    	$announcement->save();
    	return redirect('/announcements');
    }

    public function patch()
    {
    	//dd(request('body'));
    	;
        management_post::where('id', request('announcement') )->update(['body'=> request('body')]);
    	return redirect('/announcements');
    }
}
