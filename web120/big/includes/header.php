<?php include 'big-config.php';?>
<!DOCTYPE html />
<html lang=en>
    <head>
        <title><?=$title?></title>

        <!-- Meta Boilerplate -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex,nofollow" />

        <!-- Links for Google Fonts and CSS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Condensed|Roboto+Mono&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/default.css" />
        <link rel="stylesheet" href="css/nav.css" />

        <!-- jQuery -->
        <script src="js/jquery-latest.min.js"></script>

        <!-- MenuMaker Plugin -->
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>

        <!-- Icon Library -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
    </head>

    <body>
        <header>

            <!-- Menu created using CSS Menu Maker -->
            <div id="cssmenu">
                <ul>
                    <li><a href="../" target="_blank"><i class="fa fa-fw fa-bank"></i> Home</a></li>
                    <li><a href="index.php"><i class="fa fa-fw fa-home"></i> BIG</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-bars"></i> Research</a>
                        <ul>
                            <li><a href="research_r_v_m.php"><i class="fa fa-fw fa-comments"></i> Responsive vs Mobile</a></li>
                            <li><a href="research_galleries.php"><i class="fa fa-fw fa-file-image-o"></i> Galleries</a></li>
                            <li><a href="research_flexbox.php"><i class="fa fa-fw fa-newspaper-o"></i> Flexbox</a></li>
                            <li><a href="research_shopping.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Shopping Carts</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-fw fa-bars"></i> Embeds</a>
                        <ul>
                            <li><a href="video.php"><i class="fa fa-fw fa-play"></i> Video</a></li>
                            <li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                            <li><a href="school_map.php"><i class="fa fa-fw fa-map-marker"></i> Map</a></li>
                            <li><a href="streams.php"><i class="fa fa-fw fa-users"></i> Live Cams</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php"><i class="fa fa-fw fa-envelope-o"></i> Contact</a></li>
                </ul>
            </div>
            
            <h1 class="pageid"><i class="logo fa fa-fw fa-<?=$logo?>"></i> <?=$PageID?></h1>

        </header>

    