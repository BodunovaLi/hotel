<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accommodations</title>
</head>
<body>
    <h2>List of accommodations</h2>
    <table>
        <thead>
            <td>id</td>
            <td>booking_id</td>
            <td>check_in</td>
            <td>check_out</td>
        </thead>
        @foreach($accommodations as $accommodation)
            <tr>
                <td>{{$accommodation->id}}</td>
                <td>{{$accommodation->booking_id}}</td>
                <td>{{$accommodation->check_in}}</td>
                <td>{{$accommodation->check_out}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
