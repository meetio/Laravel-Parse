<?php

/*
 * This file is part of Laravel Parse.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meetio\Parse;

use Illuminate\Support\ServiceProvider;
use Parse\ParseClient;

/**
 * This is the parse service provider class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class ParseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('meetio/parse', 'meetio/parse', __DIR__);

        ParseClient::initialize(
            $this->app->config->get('meetio/parse::app_id'),
            $this->app->config->get('meetio/parse::rest_key'),
            $this->app->config->get('meetio/parse::master_key')
        );
        ParseClient::setServerURL($this->app->config->get('meetio/parse::server'), $this->app->config->get('meetio/parse::endpoint'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            //
        ];
    }
}
