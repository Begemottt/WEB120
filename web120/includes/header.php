<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <title><?=$title?></title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex,nofollow" />

        <!-- Google Fonts: Roboto Mono and Robot Slab -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">

        <!-- CSS Style-->
        <link rel="stylesheet" href="css/portal.css">
        <link rel="stylesheet" href="css/nav.css">

        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Font Awesome JavaScipt file -->
        <script src="https://use.fontawesome.com/7854527886.js"></script>

    </head>

    <body>
        <header>
            <h1><i class="logo fa <?=$logo?>"><?=$PageID?></h1>
            <nav class="topnav" id="myTopnav">

                <!-- PHP command that builds the nav list -->
                <?=makeLinks($nav1)?>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </header>
<!-- header include ends -->