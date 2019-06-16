<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
</head>
<body>
<h1>Office messaging service</h1>
<ul>
       @foreach ($messages as $message)

        <li>
        	<a href="/messages/{{$message->id}}">
        	 {{ $message->message }}
        	</a>
 
        </li>

       @endforeach
   </ul>

</body>
</html>