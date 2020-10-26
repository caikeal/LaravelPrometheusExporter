<?php

return [
    'adapter' => env('PROMETHEUS_ADAPTER', 'apc'),

    'namespace' => 'app',

    'namespace_http' => 'http',

    'redis_connection' => env('PROMETHEUS_REDIS_CONNECTION', 'default'),

    'push_gateway' => [
        'address' => env('PROMETHEUS_PUSH_GATEWAY_ADDRESS', 'localhost:9091')
    ],

    'buckets_per_route' => []
];
