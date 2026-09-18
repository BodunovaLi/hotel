<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h2>Creating a room</h2>
    <form method="post" action="{{ url('room') }}">
        @csrf

        <label>Number of room</label>
        <input type="text" name="number" value="{{ old('number') }}">
        @error('number')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Building</label>
        <select name="building_id">
            <option style="display:none"></option>
            @foreach($buildings as $building)
                <option value="{{ $building->id }}"
                    @if(old('building_id') == $building->id)
                        selected
                    @endif> {{ $building->name }}
                </option>
            @endforeach
        </select>
        @error('building_id')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Sleeps</label>
        <input type="text" name="sleeps" value="{{ old('sleeps') }}">
        @error('sleeps')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>

        <label>Price</label>
        <input type="text" name="price" value="{{ old('price') }}">
        @error('price')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit">

    </form>
</body>
</html>
