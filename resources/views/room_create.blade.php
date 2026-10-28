@extends('layout')

@section('content')
    <x-form
        title="Add room"
        description="Enter the details of the new room."
        :action="url('room')"
        submit-label="Add room"
        :back-url="url('rooms')"
        back-label="Back to rooms"
        :cancel-url="url('rooms')"
    >
        @include('room_form', ['room' => null])
    </x-form>
@endsection
