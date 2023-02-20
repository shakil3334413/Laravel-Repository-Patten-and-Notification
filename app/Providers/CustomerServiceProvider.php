<?php

namespace App\Providers;

use App\Repository\CustomerRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\CustomerRepositoryInterface;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CustomerRepositoryInterface::class,CustomerRepository::class);
    }
}
