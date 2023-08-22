<?php

namespace App\Controller;

abstract class AbstractController
{
    abstract public static function page(): void;

    protected static function view(string $view): void
    {
        require views_path($view);
    }
}
