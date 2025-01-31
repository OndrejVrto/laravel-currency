<?php

if (!function_exists('laravel_currency')) {
    /**
     * Convert given number.
     *
     * @param float  $amount
     * @param string $from
     * @param string $to
     * @param bool   $format
     *
     * @return \Torann\Currency\Currency|string
     */
    function laravel_currency($amount = null, $from = null, $to = null, $format = true)
    {
        if (is_null($amount)) {
            return app('currency');
        }

        return app('currency')->convert($amount, $from, $to, $format);
    }
}

if (!function_exists('laravel_currency_format')) {
    /**
     * Format given number.
     *
     * @param float  $amount
     * @param string $currency
     * @param bool   $include_symbol
     *
     * @return string
     */
    function laravel_currency_format($amount = null, $currency = null, $include_symbol = true)
    {
        return app('currency')->format($amount, $currency, $include_symbol);
    }
}
