<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1> {{$obj -> name}}</h1>
<h1> {{$obj -> id}}</h1>
<h1> {{$obj -> gender}}</h1>

@if($obj -> name == "ahmed")
<p>Yes it's me</p>
@else
<p>No it's not me</p>
@endif
</body>
</html>