<?php

namespace Appel\SqliteFunctions;

class ServiceProvider extends BaseProvider
{
	public function boot()
	{
		if ($this->app->make('db')->getDriverName() == 'sqlite') {
			//
		}
	}
}
