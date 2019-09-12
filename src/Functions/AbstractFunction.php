<?php

namespace Appel\SqliteFunctions\Functions;

use Exception;
use Illuminate\Support\Str;

abstract class AbstractFunction
{
    /**
     * @return \Closure
     * @throws \Exception
     */
    public function mysql()
    {
        throw new Exception('MySQL has not been implemented for this function.');
    }

    /**
     * @return \Closure
     * @throws \Exception
     */
    public function pgsql()
    {
        throw new Exception('Postgres has not been implemented for this function.');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return Str::snake(class_basename($this));
    }
}
