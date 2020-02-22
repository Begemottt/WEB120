<?php include 'includes/header.php';?>  

    <main>
        <article class="left_column">

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
            $website = "BIG Portal Site";  //place NAME of your client's website

            //echo loadContact('simple.php');#demonstrates a simple contact form
            echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>

        </article>
        
        <article class="right_column">
            <p>Welcome to my website! My name is Robin VanGilder. If you are interested in my services as a web developer or freelance philsopher, please fill out the form to the left. Feel free to look around and see some examples of my work, including some short research papers and embedded content.</p>
        </article>
    </main>

<?php include 'includes/footer.php';?>