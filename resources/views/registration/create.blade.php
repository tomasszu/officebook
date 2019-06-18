@extends ('forums.layout')



@section('content')

<h1>Register</h1>

<hr>

<form method="POST" action="/register">
	{{ csrf_field() }}
  <label for="name">Name:</label>
  <input type="text" name="name"><br> 

  <label for="email">Email:</label>
  <input type="email" name="email"><br>

  <label for="password">Password:</label>
  <input type="password" name="password"><br>

  <label for="password_confirmation">Retype password:</label>
  <input type="password" name="password_confirmation"><br>

  <input type="submit" value="Register">

  @include('layouts.errors')
</form>
<hr>

@endsection