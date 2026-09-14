<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rooms</title>
</head>
<body>
    <h2>List of rooms</h2>
    <table>
        <thead>
            <th>id</th>
            <td>building_id</td>
            <th>Room Number</th>
            <th>Sleeps</th>
            <th>Price</th>
        </thead>
        @foreach($rooms as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->building_id}}</td>
                <td>{{$room->number}}</td>
                <td>{{$room->sleeps}}</td>
                <td>{{$room->price}}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>
