<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default SMPP settings
    |--------------------------------------------------------------------------
    |
    | 1. "sender" is the SMS message sender, either phone number or something like ABCDEF.
    | 2. "source_ton"
    | 3. "source_npi"
    | 4. "destination_ton"
    | 5. "destination_npi"
    |
    */

    'defaults' => [
        'sender' => env('SMPP_SENDER'),
        'source_ton' => env('SMPP_SOURCE_TON'),
        'source_npi' => env('SMPP_SOURCE_NPI'),
        'destination_ton' => env('SMPP_DESTINATION_TON'),
        'destination_npi' => env('SMPP_DESTINATION_NPI')
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom SMPP provider settings
    |--------------------------------------------------------------------------
    */

    'default' => env('SMPP_DEFAULT_PROVIDER'),

    'providers' => [
        'example' => [
            'host' => 'localhost',
            'port' => 9999,
            'timeout' => 90,
            'login' => 'login',
            'password' => 'password'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | SMPP transport settings
    |--------------------------------------------------------------------------
    |
    | For all SMPP errors listed in "transport.catchables", exceptions
    | thrown by SMPP will be suppressed and just logged.
    |
    */

    'transport' => [
        'catchables' => [
            SMPP::ESME_RBINDFAIL,
            SMPP::ESME_RINVCMDID
        ],
        'force_ipv4' => true,
        'debug' => false
    ],

    /*
    |--------------------------------------------------------------------------
    | SMPP client settings
    |--------------------------------------------------------------------------
    */

    'client' => [
        'system_type' => 'default',
        'null_terminate_octetstrings' => false
    ]
];