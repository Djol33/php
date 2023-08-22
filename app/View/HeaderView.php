<?php

namespace App\View;

class HeaderView extends View
{
    public static function createView(): void
    {
        require views_path('/Header.html');
    }
}
