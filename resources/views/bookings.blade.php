@extends('layout')

@section('content')
    <x-table
        title="Bookings"
        description="View hotel bookings."
        :columns="['ID', 'Room ID', 'Guest ID', 'Start date', 'End date', 'Guests']"
        :empty="$bookings->isEmpty()"
        empty-message="No bookings found."
    >
        @foreach($bookings as $booking)
            <tr>
                <td class="px-4 py-3 text-secondary">{{ $booking->id }}</td>
                <td class="px-4 py-3">{{ $booking->room_id }}</td>
                <td class="px-4 py-3">{{ $booking->guest_id }}</td>
                <td class="px-4 py-3">{{ $booking->start_date }}</td>
                <td class="px-4 py-3">{{ $booking->end_date }}</td>
                <td class="px-4 py-3">{{ $booking->num_of_people }}</td>
            </tr>
        @endforeach
    </x-table>
@endsection
