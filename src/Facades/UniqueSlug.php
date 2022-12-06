<?php

namespace Amaz\LaravelSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amaz\LaravelSlug\UniqueSlug
 */
class UniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-unique-slug';
    }
}
