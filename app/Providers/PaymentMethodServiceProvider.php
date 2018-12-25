<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PaymentMethod\PaymentMethodRegistry;

class PaymentMethodServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(PaymentMethodRegistry::class)->register(
            'kartu_kredit',
            app(\App\Services\PaymentMethod\KartuKredit::class)
        );

        $this->app->make(PaymentMethodRegistry::class)->register(
            'bca_va',
            app(\App\Services\PaymentMethod\BCAVirtualAccount::class)
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentMethodRegistry::class);
    }
}
