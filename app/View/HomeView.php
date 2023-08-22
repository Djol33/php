<?php

namespace App\View;

class HomeView extends View
{
    public static function createView(): void
    {
        require views_path('/home.html');
    }
}
