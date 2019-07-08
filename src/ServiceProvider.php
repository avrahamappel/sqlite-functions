<?php

namespace Appel\SqliteFunctions;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
	public function boot()
	{
		if ($this->app->environment('testing') && $this->app['db']->getDriverName() == 'sqlite') {
            (new FunctionRegistrar)->register($this->app['db']->getPdo(), $this->app['db']->getDefaultConnection());
		}
	}
}
