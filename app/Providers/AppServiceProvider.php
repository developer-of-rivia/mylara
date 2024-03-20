<?php

namespace App\Providers;

use App\Services\Auth\Auth;
use App\Contracts\Auth\AuthContract;

use App\Services\MyHeroes\MyHeroesService;
use App\Contracts\MyHeroes\MyHeroesContract;

use App\Services\Settings\SettingsService;
use App\Contracts\Settings\SettingsContract;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{

    public $bindings = [
        AuthContract::class => Auth::class,
        MyHeroesContract::class => MyHeroesService::class,
        SettingsContract::class => SettingsService::class,
    ];


    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    }
}
