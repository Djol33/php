<?php

namespace App\View;

class AboutUsView extends View
{
    public static function createView(): void
    {
        require views_path('/about-us.html');
    }
}
