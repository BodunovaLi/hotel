@props([
    'title',
    'columns',
    'description' => null,
    'empty' => false,
    'emptyMessage' => 'No records found.',
])

<div class="container py-5">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h2 mb-1">{{ $title }}</h1>
            @if($description)
                <p class="text-secondary mb-0">{{ $description }}</p>
            @endif
        </div>

        @isset($actions)
            {{ $actions }}
        @endisset
    </div>

    @isset($filters)
        {{ $filters }}
    @endisset

    <div class="card">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        @foreach($columns as $column)
                            <th scope="col" class="px-4 py-3">{{ $column }}</th>
                        @endforeach
                    </tr>
                </thead>

                <tbody>
                    @if($empty)
                        <tr>
                            <td colspan="{{ count($columns) }}"
                                class="text-center text-secondary py-5">
                                {{ $emptyMessage }}
                            </td>
                        </tr>
                    @else
                        {{ $slot }}
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @isset($pagination)
        <div class="mt-4">
            {{ $pagination }}
        </div>
    @endisset
</div>
