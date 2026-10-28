@extends('layout')

@section('content')
    <div class="container my-auto py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <div class="card text-center">
                    <div class="card-body p-4 p-md-5">

                        <i class="fa-solid fa-hotel fa-4x text-primary mb-4"
                           aria-hidden="true"></i>

                        <h1 class="h2 mb-4">Welcome!</h1>

                        <p class="text-secondary fs-5 mb-4">
                            Log in to your staff account to manage
                            rooms, guests, and bookings.
                        </p>

                        <a href="{{ route('login') }}"
                           class="btn btn-primary btn-lg">
                            <i class="fa-solid fa-right-to-bracket me-2"
                               aria-hidden="true"></i>
                            Log in
                        </a>

                        <p class="text-secondary small mt-4 mb-0">
                            No account yet?
                            <a href="{{ route('register') }}">
                                Sign up
                            </a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
