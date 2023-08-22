<?php

use App\Controller\Home;
use App\Controller\AboutUs;
use App\Controller\Register;
use App\Controller\Login;
use Core\Routing\Route;

session_start();

ob_start();

Route::set("/", function () {
    Home::page();
});

Route::set("/about-us", function () {
    AboutUs::page();
});

Route::set("/register", function () {
    Register::page();
});

Route::set("/login", function () {
    if (!isset($_SESSION["name"]) && !isset($_SESSION["id"])) {
        Login::page();
    } else {
        header("Location: about-us");
        exit();
    }
});

if (isset($_SESSION["name"])) {
    echo $_SESSION["name"];
}

ob_end_flush();
