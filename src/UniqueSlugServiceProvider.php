<?php

namespace Amaz\LaravelSlug;

use Illuminate\Support\ServiceProvider;

class UniqueSlugServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('laravel-unique-slug', function ($app) {
            return new \Amaz\LaravelSlug\UniqueSlug();
        });
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-unique-slug.php',
            'laravel-unique-slug'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-unique-slug.php' => config_path('laravel-unique-slug.php'),
        ]);
    }
}
