<?php
session_start();
ob_start();

require 'vendor/autoload.php';
use App\Route\Route;
use App\Controller\Home;
use App\Controller\AboutUs;
use App\Controller\Register;
use App\Controller\Login;
use \App\View\HeaderView;
use App\Controller\LogOut;
use App\Controller\MakePost;
use App\Controller\ShowPosts;
use App\Controller\OpenPost;


HeaderView::createView();

Route::set("index.php", function() {
    Home::Page();
});
Route::set("about-us", function() {
    AboutUs::Page();
});

Route::set("register", function() {
    if(!isset($_SESSION["name"]) && !isset($_SESSION["id"])){
        Register::Page();


    }else {
        header("Location: about-us");

        exit();
    }
});
Route::set("login", function() {

    if(!isset($_SESSION["name"]) && !isset($_SESSION["id"])){
        Login::Page();


    }else {
        header("Location: about-us");

        exit();
    }

});


Route::set("logout", function() {
    LogOut::LogOut();
    header("Location: login");
});

Route::set("makepost", function() {
    MakePost::Page();
});
Route::set("all-posts", function() {
    ShowPosts::Page();
});

Route::set("post", function() {
OpenPost::Page();
});

ob_end_flush();
