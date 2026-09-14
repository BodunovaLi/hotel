<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room</title>
</head>
<body>
    <h2>{{$room ? "Information about Room " .$room->number: "Room not found"}}</h2>
    @if($room)
    <ul>
        <li>Id - {{$room->id}}</li>
        <li>Building_id - {{$room->building_id}}</li>
        <li>Sleeps - {{$room->sleeps}}</li>
        <li>Price - {{$room->price}}</li>
    </ul>
    @endif
</body>
</html>
