<?php
get_header();

?>
<main>
    <section class="image-center-large">
        <!-- background using get_template_directory_uri specific wordpress function to define image source -->
        <img src="<?php echo get_template_directory_uri() . './assets/images/background_restaurant.png'; ?>" alt="achtergrond van een restaurant">
    </section>


    <section class="general-info">
        <div class="general-info-text">
            <h1>Welkom bij xxxxxx</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quaerat a commodi error rerum suscipit qui deserunt officia magni ut, nemo veniam, sunt, totam alias voluptatum. Unde voluptas voluptatem perferendis.</p>
            <button class="general-info-button"><b>Contact</b></button>
        </div>
        <div class="general-info-img">
            <img src="<?php echo get_template_directory_uri() . './assets/images/company_ceo.png'; ?>" alt="ceo and owner of the company Lucy">
            <img src="<?php echo get_template_directory_uri() . './assets/images/company_ceo.png'; ?>" alt="ceo and owner of the company Lucy">
        </div>

    </section>


    <section class="menuCard">
        <h1>Menukaart</h1>
        <img src="<?php echo get_template_directory_uri() . './assets/images/grey_background.png'; ?>" alt="Dit is de menukaart van onze restaurant waar de klanten het aanbod kunnen bekijken">
        <button class="menuCard-button"><a href="<?php echo get_site_url() . '#'; ?>"> Download in PDF</a></button>
        <div class="menuCard-reservation-background">
            <h1>Reserveer</h1>
            <button class="menuCard-reservation-button"><a href="<?php echo get_site_url() . '#'; ?>"> 0118- 00 11 22 </a></button>
        </div>
    </section>
    <!-- linking using get_site_url is a  specific wordpress function to define a URL source -->

    <section class="general-info">
        <div class="general-info-text">
            <h1>Welkom bij xxxxxx</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quaerat a commodi error rerum suscipit qui deserunt officia magni ut, nemo veniam, sunt, totam alias voluptatum. Unde voluptas voluptatem perferendis.</p>
            <button class="general-info-button"><b>Contact</b></button>
        </div>
        <div class="general-info-img">
            <img src="<?php echo get_template_directory_uri() . './assets/images/company_ceo.png'; ?>" alt="ceo and owner of the company Lucy">
            <img src="<?php echo get_template_directory_uri() . './assets/images/company_ceo.png'; ?>" alt="ceo and owner of the company Lucy">
        </div>

    </section>
</main>
<?php

get_footer();
?>