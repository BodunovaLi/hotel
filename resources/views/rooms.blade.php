@extends('layout')

@section('content')
    <x-table
        title="Rooms"
        description="View and manage hotel rooms."
        :columns="['ID', 'Building ID', 'Room number', 'Capacity', 'Price per night', 'Actions']"
        :empty="$rooms->isEmpty()"
        empty-message="No rooms found."
    >
        <x-slot:actions>
            @auth
                <a href="{{ url('room/create') }}" class="btn btn-primary">
                    <i class="fa-solid fa-plus me-2" aria-hidden="true"></i>
                    Add room
                </a>
            @endauth
        </x-slot:actions>

        <x-slot:filters>
            <x-form method="get" :action="url('rooms')" :inline="true"
                    submit-label="Apply" class="mb-3">
                <label for="perpage" class="text-nowrap">Rooms per page:</label>
                <select id="perpage" name="perpage" class="form-select w-auto">
                    @foreach([2, 5, 10, 20, 50] as $count)
                        <option value="{{ $count }}" @selected(request('perpage', 2) == $count)>
                            {{ $count }}
                        </option>
                    @endforeach
                </select>
            </x-form>
        </x-slot:filters>

        @foreach($rooms as $room)
            <tr>
                <td class="px-4 py-3 text-secondary">{{ $room->id }}</td>
                <td class="px-4 py-3">{{ $room->building_id }}</td>
                <td class="px-4 py-3 fw-semibold">{{ $room->number }}</td>
                <td class="px-4 py-3">
                    <i class="fa-solid fa-user text-secondary me-1" aria-hidden="true"></i>
                    {{ $room->sleeps }}
                </td>
                <td class="px-4 py-3">
                    {{ number_format($room->price, 0, '.', ' ') }} ₽
                </td>
                <td class="px-4 py-3">
                    <div class="d-flex gap-2">
                        <a href="{{ url('room/' . $room->id) }}"
                           class="btn btn-sm btn-outline-secondary">View</a>
                        @auth
                            <a href="{{ url('room/edit/' . $room->id) }}"
                               class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="{{ url('room/destroy/' . $room->id) }}"
                               class="btn btn-sm btn-outline-danger">Delete</a>
                        @endauth
                    </div>
                </td>
            </tr>
        @endforeach

        <x-slot:pagination>
            {{ $rooms->links('pagination::bootstrap-5') }}
        </x-slot:pagination>
    </x-table>
@endsection
