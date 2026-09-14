<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Building</title>
</head>
<body>
    <h2> {{$building ? "Information about building: " .$building->name: "Building not found"}}</h2>
    @if($building)
        <table>
            <tr>
                <th>id</th>
                <th>Room Number</th>
                <th>Sleeps</th>
                <th>Price</th>
            </tr>
            @foreach($building->rooms as $room)
                <tr>
                    <td>{{$room->id}}</td>
                    <td>{{$room->number}}</td>
                    <td>{{$room->sleeps}}</td>
                    <td>{{$room->price}}</td>
                </tr>
          @endforeach
        </table>
    @endif





</body>
</html>
