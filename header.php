<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="row">
                <div class="col-5" id="logo-image-header">
                    <?php
                    $logo = get_option('company_logo_img');
                    if ($logo): ?>
                        <img src="<?php echo esc_url($logo); ?>" alt="Company Logo">
                    <?php endif; ?>
                </div>

                <div class="col" id="contact">
                    <div class=""><a href="#contact"> Contact </a></div>
                </div>
                <div class="col" id="menukaart">
                    <div class=""><a href="#menukaart"> menukaart </a></div>
                </div>

                <div class="col" id="over-ons">
                    <div class=""><a href="#over-ons"> Over ons </a></div>
                </div>

                <div class="col" id="Telefoon">
                    <a href="#over-ons"> 0118 34 534 52 </a>
                </div>
            </div>
        </div>
        </div>
    </header>