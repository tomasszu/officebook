
@extends ('forums.layout')

@section('content')
<h1>Posts in forum:</h1>

<ul>
       @foreach ($posts as $post)

        <li>
          <h5> By {{ $post->user->name }}</h5>
          <h6>Posted at: {{$post->created_at->toFormattedDateString() }}</h6>
          <p>{{ $post->text }}</p>
        </li>

       @endforeach
   </ul>

   <form action="/forums/{id}/create">
   	     <input type="hidden" name="forum_id" value={{ $id }}>
         <button type="submit">Create a new post</button>
   </form>
   	
   

@endsection