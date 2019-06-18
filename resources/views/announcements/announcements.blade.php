<!DOCTYPE html>
<html>
<head>
	<title>Announcements</title>
</head>
<body>

<h1>Announcements from the management:</h1>

<ul>
       @foreach ($announcements as $announcement)

        <li><h2>{{ $announcement->title }}</h2></li>
        <h5>Posted {{$announcement->created_at}}</h5>
        <p>{{ $announcement->body }}</p>

       @endforeach
   </ul>

</body>
</html>