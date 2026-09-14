<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookings</title>
</head>
<body>
    <h2>List of bookings</h2>
    <table>
        <thead>
            <td>id</td>
            <td>room_id</td>
            <td>guest_id</td>
            <td>start_date</td>
            <td>end_date</td>
            <td>number of people</td>
        </thead>
        @foreach($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->room_id}}</td>
                <td>{{$booking->guest_id}}</td>
                <td>{{$booking->start_date}}</td>
                <td>{{$booking->end_date}}</td>
                <td>{{$booking->num_of_people}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
