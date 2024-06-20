<?php

namespace App\Providers;

use App\Policies\RolePolicy;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        // Gate::before(function ($user, $ability) {
        //     if ($user->hasRole('super-admin')) {
        //         return true;
        //     }
        // });
        Gate::policy(Role::class, RolePolicy::class);
    }
}
