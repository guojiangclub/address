<?php

/*
 * This file is part of ibrand/address.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Address;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     *  Boot the service provider.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerMigrations();
        }
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind(RepositoryContract::class, Repository::class);
    }

    /**
     * Register migration files.
     */
    protected function registerMigrations()
    {
        return $this->loadMigrationsFrom(__DIR__.'/../migrations');
    }
}
