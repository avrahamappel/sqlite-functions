<?php

namespace Appel\SqliteFunctions\Functions;

use Closure

class Rand extends AbstractFunction
{
    /**
     * https://stackoverflow.com/questions/14155603/random-float-number-between-0-and-1-0-php
     *
     * @return \Closure
     */
    public function mysql(): Closure
    {
        return function ($seed) {
            return mt_rand() / mt_getrandmax();
        };
    }
}
