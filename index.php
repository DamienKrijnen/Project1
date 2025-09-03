<?php
get_header();

?>
<main>
    <section class="image-center-large">
        <!-- background using get_template_directory_uri specific wordpress function to define image source -->
        <?php
        $main_IMG = get_option('company_main_img');
        if ($main_IMG): ?>
            <img src="<?php echo esc_url($main_IMG); ?>" alt="Company Logo">
        <?php endif; ?>
    </section>


    <section class="general-info">
        <div class="general-info-text">
            <h1><?php echo esc_html(get_option('company_welcome_title', '')); ?></h1>
            <p><?php echo esc_html(get_option('company_welcome_text', '')); ?></p>
            <button class="general-info-button"><a href="<?php echo get_site_url() . '#'; ?>"> Contact </a></button>
        </div>
        <div class="general-info-img">
            <?php
            $picture1_text1 = get_option('company_text1_picture1_img');
            if ($picture1_text1): ?>
                <img src="<?php echo esc_url($picture1_text1); ?>" alt="Company Logo">
            <?php endif; ?>
            <?php
            $picture2_text1 = get_option('company_text1_picture2_img');
            if ($picture2_text1): ?>
                <img src="<?php echo esc_url($picture2_text1); ?>" alt="Company Logo">
            <?php endif; ?>
        </div>
    </section>


    <section class="menuCard">
        <h1>Menukaart</h1>
        <?php $pdf_url = get_option('company_menu_pdf'); ?>
        <?php if ($pdf_url): ?>
            <iframe src="<?php echo esc_url($pdf_url); ?>" width="100%" height="600px">
                Uw browser ondersteunt geen PDF-weergave. Download het menu
                <a href="<?php echo esc_url($pdf_url); ?>">hier</a>.
            </iframe>
        <?php endif; ?>
        <button class="menuCard-button"><a href="<?php echo get_site_url() . '#'; ?>"> Download in PDF</a></button>
        <div class="menuCard-reservation-background">
            <h1>Reserveer</h1>
            <button class="menuCard-reservation-button"><a href="<?php echo get_site_url() . '#'; ?>"> 0118- 00 11 22 </a></button>
        </div>
    </section>
    <!-- linking using get_site_url is a  specific wordpress function to define a URL source -->

    <section class="general-info">
        <div class="general-info-text">
            <h1><?php echo esc_html(get_option('company_second_title', '')); ?></h1>
            <p><?php echo esc_html(get_option('company_second_text', '')); ?></p>
            <button class="general-info-button"><a href="<?php echo get_site_url() . '#'; ?>"> Contact</a></button>
        </div>
        <div class="general-info-img">
            <?php
            $picture1_text2 = get_option('company_text2_picture1_img');
            if ($picture1_text2): ?>
                <img src="<?php echo esc_url($picture1_text2); ?>" alt="Company Logo">
            <?php endif; ?>
            <?php
            $picture2_text2 = get_option('company_text2_picture2_img');
            if ($picture2_text2): ?>
                <img src="<?php echo esc_url($picture2_text2); ?>" alt="Company Logo">
            <?php endif; ?>
        </div>

    </section>
</main>
<?php

get_footer();
?>