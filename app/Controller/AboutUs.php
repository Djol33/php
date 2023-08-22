<?php

namespace App\Controller;

class AboutUs extends AbstractController
{
    public static function page(): void
    {
        static::view('/about-us.php');
    }
}
