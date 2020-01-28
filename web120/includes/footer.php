<!-- footer include starts -->
        <!-- Standard footer w/ html and css checkers -->
        <footer>
            <p><small>&copy; <?php echo date('Y');?> by <a href="contactme.php">Robin VanGilder</a>, All Rights Reserved ~
            <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
            <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>

        <!-- Script for the nav bar -->
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>

</html>