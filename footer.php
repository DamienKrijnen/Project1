<footer>

    <div class="footer-container">
        <div class="row">
            <div class="col" id="contactinfo">
                <H2>hier vind je alle contact informatie:</H2>
                <H2>Email: <? $email ?></H2>
                <H2>Telefoon nummer: <? $phonenumber ?></H2>
                <H2>Adress: <? $adress ?></H2>
            </div>


            <div class="col" id="snelnaar">
                <H2>Snel naar:</H2>
                <ul>
                    <li><a href="#Home">Home </a></li>
                    <li><a href="#Menu">Menu </a></li>
                    <li><a href="#Werkenbij"> Werken bij </a></li>
                </ul>
            </div>


            <div class="col-5" id="logo-image-footer">
                <img src="<?php echo get_template_directory_uri() . './assets/images/false-logo.png'; ?>" alt="company profile">
            </div>

        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>