@extends('layout')

@section('content')
    <div class="container py-5">
        <h1 class="h2 mb-2">
            Welcome, {{ Auth::user()->name }}!
        </h1>

        <p class="text-secondary mb-4">
            Choose a section to get started.
        </p>

        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('rooms') }}"
                   class="card h-100 text-decoration-none text-dark">
                    <div class="card-body p-4">
                        <i class="fa-solid fa-bed fa-2x text-primary mb-3"
                           aria-hidden="true"></i>
                        <h2 class="h5">Rooms</h2>
                        <p class="text-secondary mb-0">
                            View rooms, prices, and capacity.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('buildings') }}"
                   class="card h-100 text-decoration-none text-dark">
                    <div class="card-body p-4">
                        <i class="fa-solid fa-building fa-2x text-primary mb-3"
                           aria-hidden="true"></i>
                        <h2 class="h5">Buildings</h2>
                        <p class="text-secondary mb-0">
                            View hotel buildings.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('guests') }}"
                   class="card h-100 text-decoration-none text-dark">
                    <div class="card-body p-4">
                        <i class="fa-solid fa-users fa-2x text-primary mb-3"
                           aria-hidden="true"></i>
                        <h2 class="h5">Guests</h2>
                        <p class="text-secondary mb-0">
                            View guest information.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('bookings') }}"
                   class="card h-100 text-decoration-none text-dark">
                    <div class="card-body p-4">
                        <i class="fa-solid fa-calendar-days fa-2x text-primary mb-3"
                           aria-hidden="true"></i>
                        <h2 class="h5">Bookings</h2>
                        <p class="text-secondary mb-0">
                            View hotel bookings.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('accommodations') }}"
                   class="card h-100 text-decoration-none text-dark">
                    <div class="card-body p-4">
                        <i class="fa-solid fa-key fa-2x text-primary mb-3"
                           aria-hidden="true"></i>
                        <h2 class="h5">Accommodations</h2>
                        <p class="text-secondary mb-0">
                            View guest stays and room assignments.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('services') }}"
                   class="card h-100 text-decoration-none text-dark">
                    <div class="card-body p-4">
                        <i class="fa-solid fa-bell-concierge fa-2x text-primary mb-3"
                           aria-hidden="true"></i>
                        <h2 class="h5">Services</h2>
                        <p class="text-secondary mb-0">
                            View additional hotel services.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
