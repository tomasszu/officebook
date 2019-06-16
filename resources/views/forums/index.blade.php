@extends ('forums.layout')



@section('content')
<h1>The List of forums:</h1>

<ul>
       @foreach ($forums as $forum)

        <li>
        	<h2><a href="/forums/{{$forum->id}}">{{ $forum->title }}</h2>
        </li>

       @endforeach
   </ul>

   <form action="/forums/create">
         <button type="submit">Create a new forum</button>
   </form>

@endsection


