<?php

namespace App\Providers;

use App\Repositories\BitCoinRepository;
use App\Repositories\BitCoinRepositoryInterface;
use App\Services\BitCoinService;
use App\Services\BitCoinServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BitCoinRepositoryInterface::class, BitCoinRepository::class);

        $this->app->bind(BitCoinServiceInterface::class, BitCoinService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
