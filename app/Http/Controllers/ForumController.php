<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use App\post;

class ForumController extends Controller
{
    public function index()
    {
    	$forums=forum::all();
    	return view('forums.index', compact('forums'));
    }

    public function show($id)
    {
    	$posts=post::where('forum_id', $id )->get();
    	return view('forums.show',compact('posts'), ['id' => $id]);
    }

    public function forumcreate()
    {
    	return view('forums.create');
    }

    public function postcreate()
    {
    	$forum_number=request('forum_id');
    	return view('forums.post_create',['forum_number'=>$forum_number]);
    }

    public function store_forum()
    {
    	//dd(request()->all());

    	$forum = new forum;
    	$forum->title = request('title');
    	$forum->save();
    	return redirect('/forums');
    }

    public function store_post()
    {
    	//dd(request()->all());

    	$post = new post;
    	$post->text = request('body');
    	$post->forum_id = request('forum_id');
    	$post->save();
    	$id= request('forum_id');
    	return redirect('/forums/'.$id.'');
    }
}
