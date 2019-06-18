<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
</head>
<body>
<h1>Sign in</h1>

	<form method="POST" action="/login">
			{{ csrf_field() }}
		  
		  <label for="email">Email:</label>
		  <input type="email" name="email"><br>

		  <label for="password">Password:</label>
		  <input type="password" name="password"><br>

		  <input type="submit" value="Login">

	  @include('layouts.errors')
	</form>

</body>
</html>