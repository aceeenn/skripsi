<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin', function($user) {
           return $user->role == 'admin';
        });
        Gate::define('isEditor', function($user) {
            return $user->role == 'manager';
        });
        Gate::define('isAuthor', function($user) {
            return $user->role == 'guest';
        });
        
    }
}
