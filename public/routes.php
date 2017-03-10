<?php

return [
    'class' => [
        'class' => App\Domains\Sales\OrderController::class,
        'method' => 'create'
    ],
    'callable' => function () {
        return 'Handler to callable';
    }
];