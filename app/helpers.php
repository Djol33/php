<?php

if (! function_exists('base_path')) {
    function base_path(string $path = '')
    {
        return BASE_PATH . $path;
    }
}

if (! function_exists('views_path')) {
    function views_path(string $path = '')
    {
        return BASE_PATH . '/resources/views' . $path;
    }
}
