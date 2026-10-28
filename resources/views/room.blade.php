@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <a href="{{ url('rooms') }}"
                   class="d-inline-block text-decoration-none mb-3">
                    <i class="fa-solid fa-arrow-left me-2"
                       aria-hidden="true"></i>
                    Back to rooms
                </a>

                @if($room)
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <i class="fa-solid fa-bed fa-2x text-primary"
                                   aria-hidden="true"></i>

                                <div>
                                    <h1 class="h3 mb-1">
                                        Room {{ $room->number }}
                                    </h1>
                                    <span class="text-secondary">
                                        Room details
                                    </span>
                                </div>
                            </div>

                            <dl class="row mb-0">
                                <dt class="col-5 text-secondary fw-normal">
                                    ID
                                </dt>
                                <dd class="col-7">{{ $room->id }}</dd>

                                <dt class="col-5 text-secondary fw-normal">
                                    Building
                                </dt>
                                <dd class="col-7">
                                    {{ $room->building?->name ?? 'Not specified' }}
                                </dd>

                                <dt class="col-5 text-secondary fw-normal">
                                    Capacity
                                </dt>
                                <dd class="col-7">
                                    {{ $room->sleeps }}
                                    {{ $room->sleeps == 1 ? 'guest' : 'guests' }}
                                </dd>

                                <dt class="col-5 text-secondary fw-normal">
                                    Price per night
                                </dt>
                                <dd class="col-7 fw-semibold">
                                    {{ number_format($room->price, 0, '.', ' ') }} ₽
                                </dd>
                            </dl>

                            @auth
                                <div class="border-top pt-3 mt-3 d-flex flex-wrap gap-2">
                                    <a href="{{ url('room/edit/' . $room->id) }}"
                                       class="btn btn-primary">
                                        <i class="fa-solid fa-pen me-2"
                                           aria-hidden="true"></i>
                                        Edit room
                                    </a>
                                    <a href="{{ url('room/destroy/' . $room->id) }}"
                                       class="btn btn-outline-danger">
                                        <i class="fa-solid fa-trash me-2"
                                           aria-hidden="true"></i>
                                        Delete room
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                @else
                    <div class="alert alert-warning">
                        Room not found.
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
