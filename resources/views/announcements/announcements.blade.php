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
        <p>{{ $announcement->body }}</p>

       @endforeach
   </ul>

</body>
</html>