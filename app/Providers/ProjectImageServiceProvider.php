<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ProjectImageRepositoryInterface;
use App\Repositories\Eloquent\ProjectImageRepository;
class ProjectImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
     $this->app->bind(
            ProjectImageRepositoryInterface::class,
            ProjectImageRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
