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
        <link rel="stylesheet" href="css/<?=$style?>.css">

        <!-- Font Awesome JavaScipt file -->
        <script src="https://kit.fontawesome.com/e63bcbdc5d.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <header>
            <h1><i class="logo fas <?=$logo?>"></i> <?=$PageID?></h1>
            <nav class="topnav" id="myTopnav">

                <!-- PHP command that builds the nav list -->
                <?=makeLinks($nav1)?>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fas fa-bars"></i>
                </a>
            </nav>
        </header>
<!-- header include ends -->