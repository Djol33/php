<?php

namespace App\Controller;

use App\Model\ModelLogin;

class Login extends AbstractController
{
    public static function page(): void
    {
        if (isset($_SESSION["id"])) {
            header("Location: about-us");
            exit();
        } else {
            static::view('/login.php');

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $model = new ModelLogin();
                $check = $model->login($_POST["email"], $_POST["password"]);
                if ($check == 1) {
                    header("Location: about-us");
                    exit();
                } else {
                    echo "Error, Try again";
                }
            }
        }
    }
}
