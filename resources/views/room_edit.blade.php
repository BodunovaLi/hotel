<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Editing the room</h2>
    <form method="post" action="{{ url('room/update/' .$room->id) }}">
        @csrf

        <label>Number of room</label>
        <input type="text" name="number" value="@if (old('number')) {{ old('number') }} @else {{ $room->number }} @endif">
        @error('number')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Building</label>
        <select name="building_id">
            <option style="display:none"></option>
            @foreach($buildings as $building)
                <option value="{{ $building->id }}"
                        @if(old('building_id'))
                            @if(old('building_id') == $building->id) selected @endif
                        @else
                            @if($room->building_id == $building->id) selected @endif
                    @endif> {{ $building->name }}
                </option>
            @endforeach
        </select>
        @error('building_id')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Sleeps</label>
        <input type="text" name="sleeps" value="@if(old('sleeps')) {{ old('sleeps') }} @else {{ $room->sleeps }} @endif">
        @error('sleeps')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Price</label>
        <input type="text" name="price" value="@if(old('price')) {{ old('price') }} @else {{ $room->price }} @endif">
        @error('price')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit">

    </form>

</body>
</html>
