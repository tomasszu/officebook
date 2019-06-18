<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;

class questionController extends Controller
{
    public function index()
    {
    	$questions=question::latest()->get();
    	return view('main.about', compact('questions'));
    }

    public function store()
    {
    	//dd(request()->all());

    	$question = new question;
    	$question->email = request('email');
    	$question->text = request('text');
    	$question->save();
    	return redirect('/about');
    }
}
