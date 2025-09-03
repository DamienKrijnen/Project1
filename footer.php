<footer>

    <div class="footer-container">
        <div class="row">
            <div class="col" id="contactinfo">
                <H2>Snel naar:</H2>
                <ul>
                    <li>Home </li>
                    <li>Menu </li>
                    <li> Werken bij</li>
                </ul>
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
                <?php
                $logo = get_option('company_logo_img');
                if ($logo): ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="Company Logo">
                <?php endif; ?>
            </div>


        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>