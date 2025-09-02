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


</main>
<?php
get_footer();
?>