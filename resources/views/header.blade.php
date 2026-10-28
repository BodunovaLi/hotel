<header class="bg-white border-bottom">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fa-solid fa-hotel text-primary me-2"
                   aria-hidden="true"></i>
                Hotel Management
            </a>

            @auth
                <ul class="navbar-nav flex-row gap-3">
                    <li class="nav-item">
                        <a href="{{ url('/') }}"
                           class="nav-link rounded px-3 {{ request()->is('/') ? 'active bg-primary bg-opacity-10 text-primary fw-semibold' : '' }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('rooms') }}"
                           class="nav-link rounded px-3 {{ request()->is('rooms', 'room/*') ? 'active bg-primary bg-opacity-10 text-primary fw-semibold' : '' }}">
                            Rooms
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('bookings') }}"
                           class="nav-link rounded px-3 {{ request()->is('bookings') ? 'active bg-primary bg-opacity-10 text-primary fw-semibold' : '' }}">
                            Bookings
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('guests') }}"
                           class="nav-link rounded px-3 {{ request()->is('guests') ? 'active bg-primary bg-opacity-10 text-primary fw-semibold' : '' }}">
                            Guests
                        </a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3">
                    <span>{{ Auth::user()->name }}</span>
                    <a class="btn btn-outline-primary" href="{{ url('logout') }}">
                        Log out
                    </a>
                </div>
            @else
                <div class="d-flex align-items-center gap-2">
                    <a class="btn btn-outline-primary" href="{{ route('login') }}">
                        Log in
                    </a>

                    <a class="btn btn-primary" href="{{ route('register') }}">
                        Sign up
                    </a>
                </div>
            @endauth
        </div>
    </nav>
</header>
