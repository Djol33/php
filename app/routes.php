<?php

use App\Route\Route;
use App\Controller\Home;
use App\Controller\AboutUs;
use App\Controller\Register;
use App\Controller\Login;
use App\View\HeaderView;

session_start();

ob_start();

HeaderView::createView();

Route::set("/", function () {
    Home::Page();
});
Route::set("/about-us", function () {
    AboutUs::Page();
});

Route::set("/register", function () {
    Register::Page();
});

Route::set("/login", function () {
    if (!isset($_SESSION["name"]) && !isset($_SESSION["id"])) {
        Login::Page();
    } else {
        header("Location: about-us");
        exit();
    }
});

if (isset($_SESSION["name"])) {
    echo $_SESSION["name"];
}

ob_end_flush();
