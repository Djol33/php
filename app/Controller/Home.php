<?php
namespace  App\Controller;

class Home extends AbstractController
{
    public static function page(): void
    {
        static::view('/home.php');
    }
}
