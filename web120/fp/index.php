<?php include 'includes/header.php';?>  

        <main>
            <!-- Left column, taking up 75% of the screen width. Main content goes here! -->
            <article id="leftcolumn">

                <!-- Slideshow gallery using JavaScript & CSS -->
                <div class="slidercontainer">  
                    <div class="showSlide fade">  
                        <img src="images/boaw1.PNG" alt="The counter at a coffee shop, with a glass case for pastries and an espresso machine." />  
                        <div class="content">Welcome!</div>  
                    </div>  
                    <div class="showSlide fade">  
                        <img src="images/boaw2.PNG" alt="A mug of coffee with the Bird on a Wire logo." />  
                        <div class="content">Proudly serving Raven's Brew coffee</div>  
                    </div>  
              
                    <div class="showSlide fade">  
                        <img src="images/boaw3.PNG" alt="The entrance to a cafe with a table outside, surrounded in brick with a neon welcome sign in the window." />  
                        <div class="content">We're open year-round!</div>  
                    </div>  
                    <div class="showSlide fade">  
                        <img src="images/boaw4.PNG" alt="A bagel sandwich being pulled apart, with melted cheese strung between the halves." />  
                        <div class="content">Now serving brunch!</div>  
                    </div>  
                    <!-- Navigation arrows -->  
                    <a class="left" onclick="nextSlide(-1)">❮</a>  
                    <a class="right" onclick="nextSlide(1)">❯</a>  
                </div>  
            

                <!-- Fill in a basic welcome message/site ID here -->
                <article class="textbox">
                    <h1>Welcome!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
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

            <!-- Script for slideshow -->
            <script src="js/slide.js"></script>
        </main>

        <?php include 'includes/footer.php';?>