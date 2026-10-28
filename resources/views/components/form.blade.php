@props([
    'action',
    'method' => 'post',
    'title' => null,
    'description' => null,
    'submitLabel' => null,
    'cancelUrl' => null,
    'backUrl' => null,
    'backLabel' => 'Back',
    'inline' => false,
])

@if(!$inline)
    <div class="container my-auto py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-5">
                @if($backUrl)
                    <a href="{{ $backUrl }}" class="d-inline-block text-decoration-none mb-3">
                        <i class="fa-solid fa-arrow-left me-2"></i>
                        {{ $backLabel }}
                    </a>
                @endif

                <div class="card">
                    <div class="card-body p-4">
                        @if($title)
                            <h1 class="h3 text-center mb-4">{{ $title }}</h1>
                        @endif

                        @if($description)
                            <p class="text-center text-secondary mb-4">{{ $description }}</p>
                        @endif
@endif

<form method="{{ $method }}" action="{{ $action }}"
      {{ $attributes->class(['d-flex flex-wrap align-items-center gap-2' => $inline]) }}>
    @if(strtolower($method) !== 'get')
        @csrf
    @endif

    {{ $slot }}

    @if($submitLabel)
        @if($inline)
            <button type="submit" class="btn btn-outline-primary">{{ $submitLabel }}</button>
        @else
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary flex-grow-1">
                    {{ $submitLabel }}
                </button>
                @if($cancelUrl)
                    <a href="{{ $cancelUrl }}" class="btn btn-outline-secondary">Cancel</a>
                @endif
            </div>
        @endif
    @endif
</form>

@isset($footer)
    <div class="text-center text-secondary mt-3">
        {{ $footer }}
    </div>
@endisset

@if(!$inline)
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
