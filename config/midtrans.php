<?php
use Midtrans\Config;

Config::$serverKey = config('midtrans.server_key');
Config::$isProduction = config('midtrans.is_production');
Config::$isSanitized = config('midtrans.is_sanitized');
Config::$is3ds = config('midtrans.is_3ds');

return [
    'server_key' => env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-D8wG47EQNhcMavRpQLjNwjh_'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-QzoyLn0GzLVCmTRC'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];
