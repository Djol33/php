<?php

namespace App\View;

class RegisterView extends View
{
    public static function createView()
    {
        require views_path('/Register.html');
    }
}
