# sulg-generator-laravel

A simple but beautiful unique slug generator for Laravel eloquent model.

---

## Installation

```sh
composer require amaz/laravel-unique-slug
```

# Configaration

Service Provider Registration In config/app.php, add in providers array -

```sh
'providers' => [
    // ...
    Akash\LaravelUniqueSlug\UniqueSlugServiceProvider::class,
    // ...
],
```

Facade Class Alias Add in aliases array -

```sh
'aliases' => Facade::defaultAliases()->merge([
    // ...
    'UniqueSlug' => Akash\LaravelUniqueSlug\Facades\UniqueSlug::class,
    // ...
])->toArray(),
```

## Use from Controller

#### Import first the UniqueSlug facade

```php
use Amaz\LaravelUniqueSlug\Facades\UniqueSlug;
```

```php
UniqueSlug::generate(App\Models\User::class, 'amaz', 'name');
// amaz

// After creating a new user with name akash, then again hit
UniqueSlug::generate(App\Models\User::class, 'amaz', 'name');
// amaz-1


// After creating a new user with name akash-1, then again hit
UniqueSlug::generate(App\Models\User::class, 'amaz', 'name');
// amaz-2
```

'providers' => [
// ...
Akash\LaravelUniqueSlug\UniqueSlugServiceProvider::class,
// ...
],```

````

#### Publish configuration

```sh
php artisan vendor:publish amaz/laravel-unique-slug
````

## Contribution

You're open to create any Pull request.
