<?php

if (!function_exists('config_path')) {
    function config_path(): string
    {
        return __DIR__ . '/../../config';
    }
}

if (!function_exists('config')) {
    function config(string $path): \Core\Support\Config
    {
        return new \Core\Support\Config($path);
    }
}

if (!function_exists('collect')) {
    function collect(array $data): \Core\Support\Collection
    {
        return new \Core\Support\Collection($data);
    }
}

