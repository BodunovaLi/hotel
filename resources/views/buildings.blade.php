@extends('layout')

@section('content')
    <x-table
        title="Buildings"
        description="View hotel buildings."
        :columns="['ID', 'Name']"
        :empty="$buildings->isEmpty()"
        empty-message="No buildings found."
    >
        @foreach($buildings as $building)
            <tr>
                <td class="px-4 py-3 text-secondary">{{ $building->id }}</td>
                <td class="px-4 py-3">{{ $building->name }}</td>
            </tr>
        @endforeach
    </x-table>
@endsection
