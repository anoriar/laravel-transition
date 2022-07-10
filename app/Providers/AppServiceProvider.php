<?php

namespace App\Providers;

use App\Transition\Repository\TransitionRepository;
use App\Transition\Service\TokenGenerator\HashIdsTokenGenerator;
use Domain\Transition\Repository\TransitionRepositoryInterface;
use Domain\Transition\Service\TokenGenerator\TokenGeneratorInterface;
use Hashids\Hashids;
use Hashids\HashidsInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TransitionRepositoryInterface::class, TransitionRepository::class);
        $this->app->bind(TokenGeneratorInterface::class, HashIdsTokenGenerator::class);
        $this->app->bind(HashidsInterface::class, Hashids::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
