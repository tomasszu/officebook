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
}
