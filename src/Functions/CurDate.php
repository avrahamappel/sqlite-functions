<?php

namespace Appel\SqliteFunctions\Functions;

class Curdate extends AbstractFunction
{
    public function mysql()
    {
        return function () {
            return date();
        };
    }
}
