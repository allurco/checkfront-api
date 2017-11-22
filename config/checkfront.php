<?php
return [
    'host'=> env('CHECKFRONT_URL'),
    'auth_type' => env('CHECKFRONT_AUTH_TYPE'),
    'api_key'  => env('CHECKFRONT_API_KEY'),
    'api_secret' => env('CHECKFRONT_API_SECRET'),
    'consumer_key'  => env('CHECKFRONT_CONSUMER_KEY'),
    'consumer_secret' => env('CHECKFRONT_CONSUMER_SECRET'),
    'redirect_uri'=> env('REDIRECT_URL')
];