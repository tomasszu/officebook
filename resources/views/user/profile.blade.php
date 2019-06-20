<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
</head>
<body>
	@include('layouts.navbar')
	@if(Auth::check())
  <h1>{{trans('phrases.hello')}}, {{Auth::user()->name}}</h1>
    @endif
	<h3> 
	<a href="/messages">See your messages</a>
	</h3>
	<hr>
	<h2> Delete your posts: </h2>
	<form method="POST" action="/forums/post_destroy">
		{{ csrf_field() }}
         {{ method_field('DELETE') }}
	<select name="post">
	  <option selected="selected" value=""></option>
	  <?php 
        foreach ($posts as $post) {
        echo '<option value="'.$post->id.'">' . $post->text . '</option>'."\r\n";
         }
      ?>
	  </select>
	  <button type="submit">Delete this post</button>
   </form>
   <hr>
   @if(auth()->user()->Permission >= 2)
   <h2> Managment control panel</h2>
   <ul>
   	   <li><strong>Delete forums</strong></li>
   	  <form method="POST" action="/forums/forum_destroy">
		{{ csrf_field() }}
         {{ method_field('DELETE') }}
	  <select name="forum">
	  <option selected="selected" value=""></option>
	  <?php 
        foreach ($forums as $forum) {
        echo '<option value="'.$forum->id.'">' . $forum->title . '</option>'."\r\n";
         }
      ?>
	  </select>
	  <button type="submit">Delete this forum</button>
     </form>
     <li><strong>Add Announcement</strong></li>
     <form method="POST" action="/announcements/create">
		{{ csrf_field() }}
	  <label for="title">Name of your announcement:</label>
	  <input type="text" id="title" name="title">
	  <label for="body">Your announcement:</label>
      <textarea name="body" id="body"></textarea>
      <input type="submit" value="Publish">
     </form>
     <li><strong>Edit Announcement</strong></li>
     <form method="POST" action="/announcements/edit">
		{{ csrf_field() }}
        {{ method_field('PATCH') }}
	  <select name="announcement">
	  <option selected="selected" value=""></option>
	  <?php 
        foreach ($announcements as $announcement) {
        echo '<option value="'.$announcement->id.'">' . $announcement->title . '</option>'."\r\n";
         }
      ?>
	  </select>
	  <label for="body2">Edited announcement:</label>
      <textarea name="body" id="body2"></textarea>
      <input type="submit" value="Edit">
     </form>
     <li><strong>Change user priviliges</strong></li>
     <form method="POST" action="/user_privilige_change">
		{{ csrf_field() }}
        {{ method_field('PATCH') }}
	  <select name="user">
	  <option selected="selected" value=""></option>
	  <?php 
        foreach ($users as $user) {
        echo '<option value="'.$user->id.'">' . $user->name . '</option>'."\r\n";
         }
      ?>
	  </select>
	  <label for="privilige">New privilige(0-2):</label>
      <input type="number" name="privilige" id="privilige">
      <input type="submit" value="Assign">
     </form>
   </ul>
   @endif
</body>
</html>