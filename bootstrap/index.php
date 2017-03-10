<?php

function server($property)
{
    return filter_input(INPUT_SERVER, $property);
}

function uri()
{
    $self = str_replace('index.php/', '', server('PHP_SELF'));
    $uri = server('REQUEST_URI') ? explode('?', server('REQUEST_URI'))[0] : '';
    if ($self !== $uri) {
        $peaces = explode('/', $self);
        array_pop($peaces);
        $uri = preg_replace('/' . preg_quote(implode('/', $peaces), '/') . '/', '', $uri, 1);
    }
    return $uri;
}
