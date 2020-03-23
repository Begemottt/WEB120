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

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['https://docs.google.com/document/d/1JqH0KIgY_vi5A-3rBSJMtG-NN-VMKA9nQmgX_sW9Gtg/edit?usp=sharing'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Robin";

switch(THIS_PAGE){

    case 'index.php':
        $title = "Robin's WEB120 Title Page";
        $logo = "fa-home";
        $PageID = 'Welcome';
        $style = 'portal';
    break;

    case 'contactme.php':
        $title = 'Contact';
        $logo = 'fa-pen-square';
        $PageID = 'Contact Robin';
        $style = 'portal';
    break;

    case 'aia.php':
        $title = 'Robins Final Project AIA';
        $logo = "fa-universal-access";
        $PageID = 'AIA';
        $style = 'aia';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $style = 'portal';
}

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>