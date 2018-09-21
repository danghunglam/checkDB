<?php

namespace App\Providers;

use App\Contracts\Repository\DBRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repository\DBRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DBRepositoryInterface::class, DBRepository::class);
        // $this->app->singleton(DBRepositoryInterface::class, function() {
        //     return new DBRepository();
        // });
        // $this->app->bind('App\Contracts\EventPusher', 'App\Services\PusherEventPusher');
        // $this->app->bind(
        //     'App\Contracts\Repository\DBRepositoryInterface',
        //     'App\Repository\DBRepository'
        // );
    }
}
