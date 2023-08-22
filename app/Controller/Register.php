<?php

namespace App\Controller;

use App\Model\ModelRegister;
use Core\AbstractController;

class Register extends AbstractController
{
    public static function page(): void
    {
        static::view('/register.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $model = new ModelRegister();
            $model->register($_POST["ime"], $_POST["email"], $_POST["password"], $_POST["conf_pass"]);
        }
    }
}
