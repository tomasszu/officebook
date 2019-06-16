@extends ('forums.layout')



@section('content')

<h1>Create a new forum:</h1>

<hr>

<form method="POST" action="/forums">
	{{ csrf_field() }}
  Forum name:<br>
  <input type="text" name="title">
  <br>
  <input type="submit" value="Create">
</form>
<hr>

@endsection