<div class="mb-3">
    <label for="number" class="form-label">Room number</label>
    <input
        id="number"
        type="text"
        name="number"
        value="{{ old('number', $room?->number) }}"
        class="form-control @error('number') is-invalid @enderror"
    >
    @error('number')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="building_id" class="form-label">Building</label>
    <select
        id="building_id"
        name="building_id"
        class="form-select @error('building_id') is-invalid @enderror"
    >
        <option value="">Select a building</option>
        @foreach($buildings as $building)
            <option
                value="{{ $building->id }}"
                @selected(old('building_id', $room?->building_id) == $building->id)
            >
                {{ $building->name }}
            </option>
        @endforeach
    </select>
    @error('building_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="sleeps" class="form-label">Capacity</label>
    <input
        id="sleeps"
        type="text"
        inputmode="numeric"
        name="sleeps"
        value="{{ old('sleeps', $room?->sleeps) }}"
        class="form-control @error('sleeps') is-invalid @enderror"
        aria-describedby="sleeps-help"
    >
    <div id="sleeps-help" class="form-text">
        Number of guests the room can accommodate.
    </div>
    @error('sleeps')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="price" class="form-label">Price per night</label>
    <input
        id="price"
        type="text"
        inputmode="numeric"
        name="price"
        value="{{ old('price', $room?->price) }}"
        class="form-control @error('price') is-invalid @enderror"
        aria-describedby="price-help"
    >
    <div id="price-help" class="form-text">
        Enter the price in rubles as a whole number.
    </div>
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
