<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guests</title>
</head>
<body>
    <h2>List of guests</h2>
    <table>
        <thead>
            <td>id</td>
            <td>name</td>
            <td>phone</td>
        </thead>
        @foreach($guests as $guest)
            <tr>
                <td>{{$guest->id}}</td>
                <td>{{$guest->name}}</td>
                <td>{{$guest->phone}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
