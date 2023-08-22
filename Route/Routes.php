<?php
session_start();
include "view/css/style.css";
ob_start();

require 'vendor/autoload.php';
use App\Route\Route;
use App\Controller\Home;
use App\Controller\AboutUs;
use App\Controller\Register;
use App\Controller\Login;
use \App\View\HeaderView;

HeaderView::createView();

Route::set("index.php", function() {
    Home::Page();
});
Route::set("about-us", function() {
    AboutUs::Page();
});

Route::set("register", function() {
    Register::Page();
});
Route::set("login", function() {

    if(!isset($_SESSION["name"]) && !isset($_SESSION["id"])){
        Login::Page();


    }else {
        header("Location: about-us");

        exit();
    }

});
IF(isset($_SESSION["name"])) {
    echo $_SESSION["name"];
}
ob_end_flush();
