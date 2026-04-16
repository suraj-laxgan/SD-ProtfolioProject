<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\SkillCategoryRepositoryInterface;
use App\Repositories\Eloquent\SkillCategoryRepository;

class SkillCategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->bind(
            SkillCategoryRepositoryInterface::class,
            SkillCategoryRepository::class
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
