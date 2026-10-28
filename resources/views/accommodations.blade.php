@extends('layout')

@section('content')
    <x-table
        title="Accommodations"
        description="View guest stays and room assignments."
        :columns="['ID', 'Booking ID', 'Check-in', 'Check-out']"
        :empty="$accommodations->isEmpty()"
        empty-message="No accommodations found."
    >
        @foreach($accommodations as $accommodation)
            <tr>
                <td class="px-4 py-3 text-secondary">{{ $accommodation->id }}</td>
                <td class="px-4 py-3">{{ $accommodation->booking_id }}</td>
                <td class="px-4 py-3">{{ $accommodation->check_in }}</td>
                <td class="px-4 py-3">{{ $accommodation->check_out ?? 'Not checked out' }}</td>
            </tr>
        @endforeach
    </x-table>
@endsection
