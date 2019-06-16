<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\management_post;

class announcementsController extends Controller
{
    public function index()
    {
    	$announcements=management_post::all();

	    return view('announcements.announcements', compact('announcements'));
    }
}
