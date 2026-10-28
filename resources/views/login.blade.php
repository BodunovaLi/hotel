@extends('layout')

@section('content')
    <x-form title="Log in" :action="url('auth')" submit-label="Log in">

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
                autocomplete="username"
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
                autocomplete="current-password"
                required
            >

        </div>

        <x-slot:footer>
            No account yet? <a href="{{ route('register') }}">Sign up</a>
        </x-slot:footer>
    </x-form>
@endsection
