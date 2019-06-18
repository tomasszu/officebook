<!DOCTYPE html>
<html>
<head>
    <title>About officebook</title>
</head>
<body>
   <h1>About us</h1>
   <br>
   <h2>Ask us a question:</h2>
   <hr>

<form method="POST" action="/about/question">
	{{ csrf_field() }}
  Your email:
  <input type="text" name="email">
  Your question:
  <input type="text" name="text">
  <input type="submit" value="Submit">
</form>
   <hr>
   <br>
   @foreach ($questions as $question)

            <strong> {{ $question->created_at->diffForHumans() }} </strong>
        	<h3> Reply to: {{ $question->email }}</h3>
        	<p>{{ $question->text }}</p>

   @endforeach
</body>
</html>