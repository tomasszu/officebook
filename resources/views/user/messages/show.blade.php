<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>
<h1>From user: {{ $id->user->name }}</h1>
<p>{{$id->message}}</p>
<form method="POST" action="/messages/{{$id->id}}/delete">
	     {{ csrf_field() }}
         {{ method_field('DELETE') }}
         <button type="delete">Delete this message</button>
   </form>
</body>
</html>