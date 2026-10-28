@extends('layout')

@section('content')
    <x-table
        title="Services"
        description="View additional hotel services."
        :columns="['ID', 'Name', 'Price']"
        :empty="$services->isEmpty()"
        empty-message="No services found."
    >
        @foreach($services as $service)
            <tr>
                <td class="px-4 py-3 text-secondary">{{ $service->id }}</td>
                <td class="px-4 py-3">{{ $service->name }}</td>
                <td class="px-4 py-3">{{ number_format($service->price, 0, '.', ' ') }} ₽</td>
            </tr>
        @endforeach
    </x-table>
@endsection
