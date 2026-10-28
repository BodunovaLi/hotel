@extends('layout')

@section('content')
    <x-form title="Sign up" :action="route('register.store')" submit-label="Create account">
        <div class="mb-3">
            <label for="name" class="form-label">
                Name
            </label>

            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="form-control @error('name') is-invalid @enderror"
                autocomplete="name"
                required
            >

            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">
                Email
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror"
                autocomplete="email"
                required
            >

        </div>

        <div class="mb-3">
            <label for="password" class="form-label">
                Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                autocomplete="new-password"
                required
            >

        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">
                Confirm password
            </label>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                class="form-control"
                autocomplete="new-password"
                required
            >
        </div>

        <x-slot:footer>
            Already have an account? <a href="{{ route('login') }}">Log in</a>
        </x-slot:footer>
    </x-form>
@endsection
