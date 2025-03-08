<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

if (!function_exists('getLocale')) {
    function getLocale() : string
    {
        $locale = app()->getLocale();
        return match ($locale) {
            "en" => 'English',
            "vi" => 'Vietnam',
            default => 'Myanmar',
        };
    }
}

if (!function_exists('maskStatusPoint')) {
    function maskStatusPoint($st) : string
    {
        return match ($st) {
            0 => 'Pending',
            2 => 'Success',
            3 => 'Failed',
            default => $st,
        };
    }
}

if(!function_exists('paginate')) {
    function paginate($items, $total, $perPage = 5, $page = null, $options = []): LengthAwarePaginator
    {
        $page = $page ? : (Paginator::resolveCurrentPage() ? : 1);
        return new LengthAwarePaginator($items, $total, $perPage, $page, $options);
    }
}
