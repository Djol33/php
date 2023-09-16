<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        /*<!--   php require __DIR__."/style.css"  -->*/
    </style>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<header id="header">

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="about-us">About Us</a></li>
            <?php if(!isset($_SESSION["name"]) && !isset($_SESSION["id"])) :?>
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
            <?php endif ?>
            <?php if(isset($_SESSION["name"]) && isset($_SESSION["id"])) :?>
            <li><a href="logout">Log Out</a></li>
            <?php endif ?>
            <li><a href="makepost">Make Post</a></li>
        </ul>
        <?php if(isset($_SESSION["name"])):?>
        <div><?= $_SESSION["name"] ?></div>
        <?php endif ?>
    </nav>


<?php echo __DIR__;?>
