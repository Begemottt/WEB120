<?php

/*
fp-config.php

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
        $title = "Bird on a Wire Espresso";
        $PageID = "";
    break;

    case 'about.php':
        $title = "About";
        $PageID = "About Us";
    break;

    case 'menu.php':
        $title = "Menu";
        $PageID = "Current Menu";
    break;

    case 'calendar.php':
        $title = "Calendar";
        $PageID = "Calendar of Events";
    break;

    case 'contact.php':
        $title = "Contact";
        $PageID = "Contact Us";
    break;

    default:
        $title = THIS_PAGE;
        $PageID = '';
}

?>