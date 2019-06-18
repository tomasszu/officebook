<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
</head>
<body>
	@if(Auth::check())
  <h1>Hello, {{Auth::user()->name}}</h1>
    @endif
	<h3> 
	<a href="/messages">See your messages</a>
	</h3>
</body>
</html>