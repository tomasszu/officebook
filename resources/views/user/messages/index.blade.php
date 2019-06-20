<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
</head>
<body>
  @include('layouts.navbar')
<h1>Office messaging service</h1>
<ul>
       @foreach ($messages as $message)

        <li>
        	<a href="/messages/{{$message->id}}">
        	 {{ $message->message }} recieved {{ $message->created_at }}
        	</a>
 
        </li>

       @endforeach
   </ul>
<hr>
<h2>Send a new Message:</h2>

<form method="POST" action="/messages/send">
		{{ csrf_field() }}
	  <label for="reciever">Send to:</label>
	  <select name="reciever" id="reciever">
	  <option selected="selected" value=""></option>
	  <?php 
        foreach ($users as $user) {
        echo '<option value="'.$user->id.'">' . $user->name . '</option>'."\r\n";
         }
      ?>
	  </select><br>
	  <label for="text">Message:</label>
	  <textarea name="text" id="text"></textarea>
	  <input type="submit" value="Send">
	  @include('layouts.errors')
</form>
<hr>

</body>
</html>