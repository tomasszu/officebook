<!DOCTYPE html>
<html>
<head>
    <title>Officebook homepage</title>
</head>
<body>
   <h1>Welcome to Officebook homepage</h1>
   @if(Auth::check())
   <ul>
    <li>
    <a href="/forums"> See Forums </a>
    </li>
    <li>
    <a href="/profile"> See Profile </a>
    </li>
    <li>
    <a href="_"> See employee of the month </a>
    </li>
    <li>
    <a href="/announcements"> See announcements board </a>
    </li>
    @endif
    <li>
    <a href="/about"> See about page </a>
    </li>
    <hr>
    <li>
    <a href="/register"> Register </a>
    </li>
    <li>
    <a href="/login"> Login </a>
    </li>
    @if(Auth::check())
    <li>
    <a href="/logout"> Logout </a>
    </li>
    @endif


   </ul> 
</body>
</html>