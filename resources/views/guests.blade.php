@extends('layout')

@section('content')
    <x-table
        title="Guests"
        description="View guest information."
        :columns="['ID', 'Name', 'Phone']"
        :empty="$guests->isEmpty()"
        empty-message="No guests found."
    >
        @foreach($guests as $guest)
            <tr>
                <td class="px-4 py-3 text-secondary">{{ $guest->id }}</td>
                <td class="px-4 py-3">{{ $guest->name }}</td>
                <td class="px-4 py-3">{{ $guest->phone }}</td>
            </tr>
        @endforeach
    </x-table>
@endsection
