<?php

namespace App\Kernel;

use Throwable;

class Http
{
    public function handler($match, $parameters = [])
    {
        $callable = $match;
        if (is_array($match)) {
            $class = $match['class'];
            $callable = [new $class, $match['method']];
        }
        return call_user_func_array($callable, $parameters);
    }

    public function fallback(Throwable $error)
    {
        return "The error {$error->getMessage()} was triggered at request}";
    }
}