<?php

/*
portal-config.php

User to store all our web120 configuration information
*/

// Prevents data from being sent early

ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Robin's BIG Website";
        $logo = "home";
        $PageID = 'Welcome';
    break;

    case 'contact.php':
        $title = 'Contact';
        $logo = 'envelope-o';
        $PageID = 'Contact Robin';
    break;

    case 'research_r_v_m.php':
        $title = "Research: Responsive Website vs Mobile App";
        $logo = "comments";
        $PageID = 'Responsive Website vs Mobile App';
    break;

    case 'research_galleries.php':
        $title = "Research: Galleries";
        $logo = "file-image-o";
        $PageID = 'Galleries';
    break;

    case 'research_flexbox.php':
        $title = "Research: Flexbox";
        $logo = "newspaper-o";
        $PageID = 'Flexbox';
    break;

    case 'research_shopping.php':
        $title = "Research: Shopping Carts";
        $logo = "cart-arrow-down";
        $PageID = 'Shopping Carts';
    break;

    case 'school_map.php':
        $title = "South Seattle College map";
        $logo = "map-marker";
        $PageID = 'SCC Map';
    break;

    case 'video.php':
        $title = "Web Accessibility Video";
        $logo = "play";
        $PageID = 'Web Accessibility Video';
    break;

    case 'calendar.php':
        $title = "Example of an Embedded Calendar";
        $logo = "calendar";
        $PageID = 'Calendar';
    break;

    case 'streams.php':
        $title = "Example of Embedded Live Streams";
        $logo = "users";
        $PageID = 'Live Stream';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

?>