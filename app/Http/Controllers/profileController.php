<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
    	$name='Thomas';
        return view('user.profile', compact('name'));
    }
}
