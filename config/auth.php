<?php

return [

    /*
    |-------------------------|
    | Authentication Defaults |
    |-------------------------|
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |-----------------------|
    | Authentication Guards |
    |-----------------------|
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |----------------|
    | User Providers |
    |----------------|
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |---------------------|
    | Resetting Passwords |
    |---------------------|
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |-------------------------------|
    | Password Confirmation Timeout |
    |-------------------------------|
    */

    'password_timeout' => 10800,

];
