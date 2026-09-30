<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('pagination::bootstrap-4');

        Gate::define('destroy-room', function ($user, $room) {
            return $user->is_admin or $room->price < 2000;
        });

        Gate::define('edit-room', function ($user, $room) {
            return $user->is_admin or $room->price < 3000;
        });
    }
}
