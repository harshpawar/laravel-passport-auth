## Laravel Passport Auth Package
- To authenticate laravel apis

## Version : 1.0.0
Description : First all files added without test.

## Version : 1.0.1
Description : README.md file added.

## Introduction 
api authentication package.

## Instructions

First, install this package:

    composer require harshpawar/laravel-passport

Next, move the files from vendor folder to root folder using below script

    php artisan vendor:publish --tag=passport-config
    php artisan migrate
    php artisan passport:install

Configure Passport in AuthServiceProvider:

    use Laravel\Passport\Passport;

    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }

Use Middleware: Ensure your routes are protected by the auth:api middleware.

    Route::middleware('auth:api')->group(function () {
        // Protected routes
    });