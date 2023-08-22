<?php

namespace App\Controller;

use Core\AbstractController;

class AboutUs extends AbstractController
{
    public static function page(): void
    {
        static::view('/about-us.php');
    }
}
