<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use App\post;

class ForumController extends Controller
{

	public function __construct()
	{
       $this->middleware('auth')->except([]);
	}

    public function index()
    {
        //dd(auth()->user()->Permission);
    	$forums=forum::where('permission','<=' , auth()->user()->Permission )->get();
    	return view('forums.index', compact('forums'));
    }

    public function show($id)
    {
    	$posts=post::where('forum_id', $id )->latest()->get();
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
        $forum->Permission = auth()->user()->Permission;
    	$forum->save();
    	return redirect('/forums');
    }

    public function store_post()
    {
    	//dd(request()->all());

    	$post = new post;
    	$post->text = request('body');
    	$post->forum_id = request('forum_id');
    	$post->user_id = auth()->id();
    	$post->save();
    	$id= request('forum_id');
    	return redirect('/forums/'.$id.'');
    }

    public function destroy_post()
    {
        //dd(request()->all());

        $id= request('post');
        post::where('id', $id )->delete();
        return redirect('/profile');
    }

    public function destroy_forum()
    {
        //dd(request()->all());

        $id= request('forum');
        forum::where('id', $id )->delete();
        return redirect('/profile');
    }
}
