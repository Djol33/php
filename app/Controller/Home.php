<?php

namespace App\Controller;

use Core\AbstractController;

class Home extends AbstractController
{
    public static function page(): void
    {
        static::view('/home.php');
    }
}
