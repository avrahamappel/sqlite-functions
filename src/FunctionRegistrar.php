<?php

namespace Appel\SqliteFunctions;

use PDO;

class FunctionRegistrar
{
    protected $functions = [
        Functions\Curdate::class,
        Functions\DateFormat::class,
        Functions\Rand::class,
        Functions\Regexp::class,
        Functions\Substring::class,
    ];

    /**
     * @param  \PDO  $pdo
     * @param  string  $driver
     * @param  array|null  $functions
     */
    public function register(PDO $pdo, string $driver, ?array $functions = null)
    {
        foreach ($functions ?? $this->functions as $function) {
            $instance = new $function;

            $pdo->sqliteCreateFunction($instance->getName(), $instance->{$driver}());
        }
    }
}
