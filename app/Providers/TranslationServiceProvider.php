<?php

namespace App\Providers;

use App\Interfaces\Translation;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
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
        $this->app->bind(Translation::class, function($app) {
                $translateClass = "App\TranslationServices\\".ucfirst(env('TRANSLATION_CHANNEL'))."\Translate";
                return $app->make($translateClass);
        });
    }
}
