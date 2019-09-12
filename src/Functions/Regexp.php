<?php

namespace Appel\SqliteFunctions\Functions;

use Closure;

class Regexp extends AbstractFunction
{
    /**
     * Thanks to anrdaemon@freemail.ru
     * @see https://www.php.net/manual/en/function.sqlite-create-function.php#120247
     * @return \Closure
     */
    public function mysql(): Closure
    {
        return function($pattern, $subject) {
            return preg_match('/' . addcslashes($pattern, '/') . '/', $subject);
        };
    }
}
