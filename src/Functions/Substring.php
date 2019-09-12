<?php

namespace Appel\SqliteFunctions\Functions;

use Closure;

class Substring extends AbstractFunction
{
    public function mysql(): Closure
    {
        return function ($string, $start, $length = null) {
            return substr($string, $start, $length);
        };
    }
}
