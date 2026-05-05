<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ProjectTechnologyRepositoryInterface;
use App\Repositories\Eloquent\ProjectTechnologyRepository;

class ProjectTechnologyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
         $this->app->bind(
            ProjectTechnologyRepositoryInterface::class,
            ProjectTechnologyRepository::class
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
