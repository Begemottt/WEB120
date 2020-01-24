<?php include 'includes/header.php';?>  

        <main>

        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "poliosis@gmail.com";  //place your/your client's email address here
        $toName = "Robin VanGilder"; //place your client's name here
        $website = "WEB120 Portal Site";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

        </main>

        <?php include 'includes/footer.php';?>