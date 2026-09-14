<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accommodation</title>
</head>
<body>
    <h2>{{$accommodation ? "Information about accommodation " .$accommodation->id: "Accommodation not found"}}</h2>
    @if($accommodation)
        <table>
            <thead>
                <td>id</td>
                <td>name</td>
                <td>price</td>
            </thead>
            @foreach($accommodation->services as $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>{{$service->name}}</td>
                    <td>{{$service->price}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
