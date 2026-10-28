@if($errors->hasAny(['email', 'password', 'error', 'success']) || session('message'))
    <div class="container mt-4">
        @error('email')
            <div class="alert alert-warning" role="alert">{{ $message }}</div>
        @enderror

        @error('password')
            <div class="alert alert-warning" role="alert">{{ $message }}</div>
        @enderror

        @error('error')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror

        @error('success')
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @enderror

        @if(session('message'))
            <div class="alert alert-warning d-flex align-items-center gap-2" role="alert">
                <i class="fa-solid fa-triangle-exclamation" aria-hidden="true"></i>
                <span>{{ session('message') }}</span>
            </div>
        @endif
    </div>
@endif
