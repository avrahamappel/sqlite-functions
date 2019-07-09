<?php

namespace Appel\SqliteFunctions;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * Bootstrap the package.
     */
	public function boot()
	{
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sqlite-functions.php' => $this->app->configPath(),
            ]);
        }

	    $this->mergeConfigFrom(__DIR__.'/../config/sqlite-functions.php', 'sqlite-functions');

        $this->registerFunctions();
    }

    /**
     * Register the functions.
     */
    protected function registerFunctions(): void
    {
        if ($this->app->environment('testing') && $this->app['db']->getDriverName() == 'sqlite') {
            (new FunctionRegistrar)->register($this->app['db']->getPdo(), config('sqlite-functions.driver_to_mimic'));
        }
    }
}
