<?php include 'includes/header.php';?>  

        <main>
            <!-- Left column, taking up 75% of the screen width. Main content goes here! -->
            <article id="leftcolumn">

            <div class="pageheader"><h2 class="pageid"><?=$PageID?></h2></div>

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
            $website = "Bird on a Wire Espresso";  //place NAME of your client's website

            echo loadContact('simple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

            ?>

            </article>

            <!-- Right column, a smaller sidebar only taking up 20% of the screen -->
            <article id="rightcolumn">

                <!-- The box for the address and other links -->
                <article class="addressbox">
                    <h2><a href="https://www.google.com/maps/place/Bird+On+A+Wire+Espresso/@47.522762,-122.3794698,17z/data=!3m1!4b1!4m5!3m4!1s0x5490415b55b55dc1:0xf1128174b34c5b00!8m2!3d47.522762!4d-122.3772811" target="_blank"><address>3507 SW Henderson St<br />Seattle, WA<br />98126</address></a></h2>
                    <h2>Check us out on:</h2>
                    <ul>
                        <li><p><a href="https://www.yelp.com/biz/bird-on-a-wire-espresso-seattle-2" target="_blank">Yelp</a></p></li>
                        <li><p><a href="https://www.zomato.com/seattle/bird-on-a-wire-espresso-west-seattle" target="_blank">Zomato</a></p></li>
                    </ul>
                </article>

                <!-- Box for the google calendar (filler image for now) -->
                <article class="calendarbox">
                    <img src="images/filler.png" />
                </article>

            </article>

        </main>

        <?php include 'includes/footer.php';?>