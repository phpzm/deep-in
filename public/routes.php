<?php

return [
    '/' => function() {
        return '<a href="/class">/class</a> or <a href="/callable">/callable</a>';
    },
    '/class' => [
        'class' => App\Domains\Sales\OrderController::class,
        'method' => 'create'
    ],
    '/callable' => function () {
        return 'Handler to callable';
    }
];