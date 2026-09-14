<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service</title>
</head>
<body>
    <h2>{{$service? "Information about service " .$service->name: "Service not found"}}</h2>
    @if($service)
        <table>
            <thead>id</thead>
            <thead>booking_id</thead>
            <thead>check_in</thead>
            <thead>check_out</thead>
            @foreach($service->accommodations as $accommodation)
                <tr>
                    <td>{{$accommodation->id}}</td>
                    <td>{{$accommodation->booking_id}}</td>
                    <td>{{$accommodation->check_in}}</td>
                    <td>{{$accommodation->check_out}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
