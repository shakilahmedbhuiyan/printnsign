<?php

namespace App\Providers;

use App\Policies\RolePolicy;
use App\Policies\PermissionPolicy;
use Filament\Support\Colors\Color;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Permission;
use Filament\Support\Facades\FilamentColor;

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
         Gate::before(function ($user, $ability) {
             if ($user->hasRole('super-admin')) {
                 return true;
             }
             return $user->can($ability);
         });
        Gate::policy(Role::class, RolePolicy::class);
        Gate::policy(Permission::class, PermissionPolicy::class);

        FilamentColor::register([
            'danger' => Color::Red,
            'gray' => Color::Zinc,
            'info' => Color::Blue,
            'primary' => Color::Amber,
            'success' => Color::Green,
            'warning' => Color::Amber,
        ]);
    }
}
