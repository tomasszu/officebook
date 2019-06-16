@extends ('forums.layout')



@section('content')

<h1>Create a new Post:</h1>

<hr>

<form method="POST" action="/forums/{id}">
	{{ csrf_field() }}
  <label for="body">Write your post:</label><br>
  <textarea name="body"></textarea> 
  <input type="hidden" name="forum_id" value={{$forum_number}}>
  <input type="submit" value="Create">
</form>
<hr>

@endsection