@extends('layout')

@section('content')
    <x-form
        title="Edit room"
        description="Update the room details."
        :action="url('room/update/' . $room->id)"
        submit-label="Save changes"
        :back-url="url('rooms')"
        back-label="Back to rooms"
        :cancel-url="url('rooms')"
    >
        @include('room_form', ['room' => $room])
    </x-form>
@endsection
