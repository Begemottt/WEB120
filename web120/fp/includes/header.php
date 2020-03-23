<?php include 'fp-config.php';?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title><?=$title?></title>

        <!-- Meta Boilerplate -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex,nofollow" />

        <!-- Google fonts: "Montserrat", "Roboto Condensed" and "Lobster Two" -->
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Montserrat|Roboto+Condensed&display=swap" rel="stylesheet" />

        <!-- Cascading Style Sheets: A reset, then a standard, then a page-specific -->
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/standard.css" />
        <link rel="stylesheet" href="css/main.css" />
        <!-- Plus, one for the nav bar! -->
        <link rel="stylesheet" href="css/nav.css" />

        <!-- Font Awesome script -->
        <script src="https://kit.fontawesome.com/e63bcbdc5d.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <header>
            <nav>
                <div class="topnav">
                    <a href="about.php" class="navbutton"><p class="navtext">About</p><i class="fas fa-home"></i></a>
                    <a href="menu.php" class="navbutton"><p class="navtext">Menu</p><i class="fas fa-coffee"></i></a>
                    <a href="calendar.php" class="navbutton"><p class="navtext">Calendar</p><i class="fas fa-calendar"></i></a>
                    <a href="contact.php" class="navbutton"><p class="navtext">Contact</p><i class="fas fa-mail-bulk"></i></a>
                </div>
            </nav>
        </header>
        <a href="index.php" id="logobutton"><img src="images/bird_logo_svg.svg" id="birdLogo" alt="The Bird on a Wire logo" /></a>
